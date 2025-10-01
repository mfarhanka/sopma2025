<?php
function updateMedalTally($pdo) {
    // Reset all counts
    $pdo->exec("UPDATE medal_tally SET gold=0, silver=0, bronze=0");

    // Get all results
    $results = $pdo->query("SELECT gold, silver, bronze FROM results")->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $r) {
        if(!empty($r['gold'])) {
            $stmt = $pdo->prepare("INSERT INTO medal_tally (state_name, gold, silver, bronze) 
                                   VALUES (?,1,0,0) 
                                   ON DUPLICATE KEY UPDATE gold = gold + 1");
            $stmt->execute([$r['gold']]);
        }

        if(!empty($r['silver'])) {
            $stmt = $pdo->prepare("INSERT INTO medal_tally (state_name, gold, silver, bronze) 
                                   VALUES (?,0,1,0) 
                                   ON DUPLICATE KEY UPDATE silver = silver + 1");
            $stmt->execute([$r['silver']]);
        }

        if(!empty($r['bronze'])) {
            $stmt = $pdo->prepare("INSERT INTO medal_tally (state_name, gold, silver, bronze) 
                                   VALUES (?,0,0,1) 
                                   ON DUPLICATE KEY UPDATE bronze = bronze + 1");
            $stmt->execute([$r['bronze']]);
        }
    }
}
?>

function loadMedals() {
    fetch('fetch_medals.php')
        .then(res => res.json())
        .then(data => {
            const tbody = document.getElementById('medal-tbody');
            tbody.innerHTML = '';
            data.forEach(row => {
                tbody.innerHTML += `
                <tr class="hover:bg-yellow-50 transition">
                  <td class="px-4 py-3 font-medium text-slate-800">${row.state_name}</td>
                  <td class="px-4 py-3 font-bold text-yellow-600">${row.gold}</td>
                  <td class="px-4 py-3 font-bold text-gray-500">${row.silver}</td>
                  <td class="px-4 py-3 font-bold text-amber-700">${row.bronze}</td>
                  <td class="px-4 py-3 font-extrabold text-indigo-700">${row.total}</td>
                </tr>`;
            });
        });
}

function loadResults() {
    fetch('fetch_results.php')
    .then(res => res.json())
    .then(data => {
        const tbody = document.getElementById('results-tbody');
        const cards = document.getElementById('results-cards');
        tbody.innerHTML = '';
        cards.innerHTML = '';

        data.forEach(match => {
            const score1 = match.gold ?? 0;
            const score2 = match.silver ?? 0;

            // Desktop
            tbody.innerHTML += `
            <tr class="hover:bg-blue-50 transition">
                <td class="px-4 py-3 font-medium text-slate-800">${match.sport}</td>
                <td class="px-4 py-3 text-slate-600">${match.venue}</td>
                <td class="px-4 py-3 text-slate-600">${match.match_date}</td>
                <td class="px-4 py-3 text-center font-medium text-slate-800">${match.event_name}</td>
                <td class="px-4 py-3 text-center font-bold text-blue-900">
                    <span class="px-3 py-1 bg-blue-100 rounded-lg">${score1} - ${score2}</span>
                </td>
            </tr>`;

            // Mobile
            cards.innerHTML += `
            <div class="bg-white rounded-lg shadow-lg border border-slate-200 p-4">
                <h3 class="font-bold text-lg text-blue-800 mb-2">${match.sport}</h3>
                <p class="text-slate-600 text-sm mb-1"><strong>Venue:</strong> ${match.venue}</p>
                <p class="text-slate-600 text-sm mb-3"><strong>Date:</strong> ${match.match_date}</p>
                <div class="flex justify-between items-center font-semibold text-slate-800">
                    <span>${match.event_name}</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-lg shadow-sm">${score1} - ${score2}</span>
                </div>
            </div>`;
        });
    });
}

// Initial load
loadMedals();
loadResults();

// Refresh every 5 seconds
setInterval(loadMedals, 5000);
setInterval(loadResults, 5000);

// Update medals every 5 seconds
async function updateMedals() {
    const res = await fetch('fetch_medals.php');
    const medals = await res.json();

    let html = `
    <table class="min-w-full border divide-y divide-slate-200 text-center rounded-xl overflow-hidden shadow-lg">
    <thead class="bg-gray-100">
        <tr>
            <th>State</th><th>🥇 Gold</th><th>🥈 Silver</th><th>🥉 Bronze</th><th>Total</th>
        </tr>
    </thead>
    <tbody>
    `;

    medals.forEach(m => {
        html += `
        <tr class="hover:bg-yellow-50">
            <td>${m.state_name}</td>
            <td>${m.gold}</td>
            <td>${m.silver}</td>
            <td>${m.bronze}</td>
            <td>${m.total}</td>
        </tr>`;
    });

    html += '</tbody></table>';
    document.getElementById('medal-standings').innerHTML = html;
}

// Update results every 5 seconds
async function updateResults() {
    const res = await fetch('fetch_results.php');
    const results = await res.json();

    let html = `
    <table class="min-w-full border divide-y divide-slate-200 text-center rounded-xl overflow-hidden shadow-lg">
    <thead class="bg-blue-100">
        <tr>
            <th>Sport</th><th>Event</th><th>Venue</th><th>Date</th><th>Gold</th><th>Silver</th><th>Bronze</th>
        </tr>
    </thead>
    <tbody>
    `;

    results.forEach(r => {
        html += `
        <tr class="hover:bg-blue-50">
            <td>${r.sport_name}</td>
            <td>${r.event_name}</td>
            <td>${r.sport_venue}</td>
            <td>${r.match_date}</td>
            <td>${r.gold}</td>
            <td>${r.silver}</td>
            <td>${r.bronze}</td>
        </tr>`;
    });

    html += '</tbody></table>';
    document.getElementById('live-results').innerHTML = html;
}

// Initial load
updateMedals();
updateResults();

// Auto-refresh every 5 seconds
setInterval(() => {
    updateMedals();
    updateResults();
}, 5000);



async function refreshData() {
    const resp = await fetch('fetch_frontend_data.php');
    const data = await resp.json();

    // Update medal table
    const medalTbody = document.getElementById('medal-tbody');
    medalTbody.innerHTML = data.medals.map(m => `
        <tr class="hover:bg-yellow-50 transition">
            <td class="px-4 py-3 font-medium text-slate-800">${m.state_name}</td>
            <td class="px-4 py-3 font-bold text-yellow-600">${m.gold}</td>
            <td class="px-4 py-3 font-bold text-gray-500">${m.silver}</td>
            <td class="px-4 py-3 font-bold text-amber-700">${m.bronze}</td>
            <td class="px-4 py-3 font-extrabold text-indigo-700">${m.total}</td>
        </tr>
    `).join('');

    // Update results table
    const resultsTbody = document.getElementById('results-tbody');
    resultsTbody.innerHTML = data.results.map(r => `
        <tr class="hover:bg-blue-50 transition">
            <td class="px-4 py-3 font-medium text-slate-800">${r.sport_name}</td>
            <td class="px-4 py-3">${r.event_name}</td>
            <td class="px-4 py-3">${r.sport_venue}</td>
            <td class="px-4 py-3">${r.match_date}</td>
            <td class="px-4 py-3 font-bold text-yellow-600">${r.gold}</td>
            <td class="px-4 py-3 font-bold text-gray-500">${r.silver}</td>
            <td class="px-4 py-3 font-bold text-amber-700">${r.bronze}</td>
        </tr>
    `).join('');
}

// Refresh every 10 seconds
setInterval(refreshData, 10000);
refreshData(); // initial load

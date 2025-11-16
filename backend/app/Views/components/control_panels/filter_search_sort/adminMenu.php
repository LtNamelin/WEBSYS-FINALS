<form id="productsFilterForm" onsubmit="return false;" class="flex sm:flex-row flex-col sm:items-center gap-3 mb-4">
    <input type="search" id="products_query" placeholder="Search by Product ID or Product Name"
        class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 w-full sm:w-1/3">

    <select id="products_sort"
        class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md focus:outline-none w-full sm:w-48 cursor-pointer">
        <option value="">Sort — default</option>
        <option value="name_asc">Name A → Z</option>
        <option value="name_desc">Name Z → A</option>
        <option value="price_asc">Price Low → High</option>
        <option value="price_desc">Price High → Low</option>
    </select>

    <div class="flex color-light-latte gap-2 ml-auto rounded-md">
        <button type="button" id="productsResetBtn"
            class="inline-flex items-center bg-white hover:bg-slate-50 shadow-sm px-3 py-2 border border-slate-200 rounded-md cursor-pointer">
            Reset
        </button>
    </div>
</form>

<script>
(function() {
    function waitForTable(maxAttempts = 40, interval = 50) {
        return new Promise((resolve) => {
            let attempts = 0;
            const intervalId = setInterval(() => {
                const table = document.querySelector('table');
                attempts++;
                if (table || attempts >= maxAttempts) {
                    clearInterval(intervalId);
                    resolve(table);
                }
            }, interval);
        });
    }

    function initForTable(table) {
        if (!table) return;

        const queryInput = document.getElementById('products_query');
        const sortSelect = document.getElementById('products_sort');
        const statusSelect = document.getElementById('products_status');
        const resetBtn = document.getElementById('productsResetBtn');

        // Build array snapshot of rows with searchable fields
        const rows = Array.from(table.querySelectorAll('tbody tr'));
        const snapshot = rows.map(row => {
            const cols = Array.from(row.querySelectorAll('td'));
            return {
                id: (cols[0]?.textContent ?? '').trim(),
                name: (cols[1]?.textContent ?? '').trim().toLowerCase(),
                price: parseFloat((cols[2]?.textContent ?? '0').replace(/[₱,]/g, '')) || 0,
                description: (cols[3]?.textContent ?? '').trim().toLowerCase(),
                html: row.outerHTML
            };
        });

        function render(list) {
            const tbody = table.querySelector('tbody');
            if (!list.length) {
                tbody.innerHTML = '<tr><td class="p-3 text-center" colspan="12">No products match your search.</td></tr>';
                return;
            }
            tbody.innerHTML = list.map(item => item.html).join('\n');
        }

        function apply() {
            const query = queryInput.value.trim().toLowerCase();
            const sort = sortSelect.value;
            
            let out = snapshot.filter(p => !query || p.name.includes(query) || p.description.includes(query)
            );

            if (sort === 'name_asc') out.sort((a,b)=>a.name.localeCompare(b.name));
            else if (sort === 'name_desc') out.sort((a,b)=>b.name.localeCompare(a.name));
            else if (sort === 'price_asc') out.sort((a,b)=>a.price - b.price);
            else if (sort === 'price_desc') out.sort((a,b)=>b.price - a.price);
            
            render(out);
        }

        queryInput.addEventListener('input', apply);
        sortSelect.addEventListener('change', apply);
        resetBtn.addEventListener('click', () => {
            queryInput.value = '';
            sortSelect.value = '';
            apply();
        });

        apply(); // initial load
    }

    // Wait for DOM ready and the table to exist
    if (document.readyState === 'complete' || document.readyState === 'interactive') {
        waitForTable().then(initForTable);
    } else {
        document.addEventListener('DOMContentLoaded', () => waitForTable().then(initForTable));
    }
})();
</script>

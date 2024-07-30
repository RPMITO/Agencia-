document.getElementById('filter-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const destination = document.getElementById('destination').value.toLowerCase();
    const date = document.getElementById('date').value;
    
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = ''; // Clear previous results
    
    const filteredPackages = travelPackages.filter(pkg => {
        return pkg.destination.toLowerCase().includes(destination) && pkg.date === date;
    });
    
    if (filteredPackages.length > 0) {
        filteredPackages.forEach(pkg => {
            const pkgDiv = document.createElement('div');
            pkgDiv.innerHTML = `
                <h3>${pkg.destination}</h3>
                <p>Fecha: ${pkg.date}</p>
                <p>Precio: ${pkg.price}</p>
            `;
            resultsDiv.appendChild(pkgDiv);
        });
    } else {
        resultsDiv.innerHTML = '<p>No se encontraron paquetes para los filtros seleccionados.</p>';
    }
});

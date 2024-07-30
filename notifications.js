function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.innerText = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        document.body.removeChild(notification);
    }, 5000);
}

document.addEventListener('DOMContentLoaded', function() {
    // Simulate real-time updates
    setInterval(() => {
        const specialOffer = travelPackages[Math.floor(Math.random() * travelPackages.length)];
        showNotification(`¡Oferta especial viaja a ${specialOffer.destination}! con estadia: ${specialOffer.price},solo por Hoy!!`);
    }, 10000);
});
class TravelPackage {
    constructor(destination, date, price, availability) {
        this.destination = destination;
        this.date = date;
        this.price = price;
        this.availability = availability;
    }

    getDetails() {
        return `Destino: ${this.destination}, Fecha: ${this.date}, Precio: ${this.price}, Disponibilidad: ${this.availability}`;
    }

    isAvailable() {
        return this.availability > 0;
    }

    bookPackage() {
        if (this.isAvailable()) {
            this.availability--;
            return true;
        } else {
            return false;
        }
    }
}

const travelPackages = [
    new TravelPackage('Arica', '2024-08-15', "5 Dias y 4 Noches" , 5),
    new TravelPackage('Viña del Mar', '2024-09-10', "4 Dias y 3 Noches", 3),
    new TravelPackage('Punta Arenas', '2024-10-05', "7 Dias y 6 Noches", 2),
];
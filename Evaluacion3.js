//Objetos constructores

function Actividad(Arica,Viña,PuntaArenas){
    this.Arica = Arica;
    this.Viña = Viña;
    this.PuntaArenas=this.PuntaArenas;
}
const actividad01 = new Actividad("Esta promocion consiste en 5 dias y 4 noches en la ciudad de Arica" );
const actividad02 = new Actividad("Esta promocion consiste en 4 dias y 3 noches en la ciudad de Viña del mar" );
const actividad03 = new Actividad("Esta promocion consiste en 5 dias y 4 noches en la ciudad de Punta Arenas" );

console.log(actividad01);

let lugaresInfo = []

const seguirLugares = () =>{
    fetch('https://goo.gl/maps/BRpeLx8qtt3Bepne9.json')
    .then(response => response.json())
    .then(lugares =>{
        console.log(lugares)
        lugares.forEach(lugar => {
            let lugarInfo ={
                posicion:{ lat:lugar.punto.cordinates[1],lng:lugar.punto.coordinates[0],
                nobre:lugar.nombre_sede}
            }
            lugaresInfo.push(lugarInfo)
        })
        if (navigator.geolocation){
            navigator.geolocation.getCurrentPosition(usuarioUbicacion =>{
                let ubicacion ={
                    lat:usuarioUbicacion.coords.latitude,
                    lat:usuarioUbicacion.coords.longitude,
                }
                dibujarMapa(ubicacion)
            })
        }
    })
}

const dibujarMapa = (obj) =>{
    let mapa = new google.maps.Map(document.getElementById('map'),{
        center:obj,
        zoom:4
    })
    let marcadorUsuario = new google.maps.Marker({
        position:obj,
        title:'Tu ubicacion'
    })
    marcadorUsuario.setMap(mapa)
    let marcadores = lugaresInfo.map(lugar =>{
        return new google.maps.Marker({
            position: lugar.posicion,
            title: lugar.nombre,
            map: mapa
        })
    })
}
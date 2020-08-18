<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COVID 19</title>
        <style>
            body {
                margin: 0;
            }
            .map {
                width: 100vw;
                height: 100vh;
            }
            </style>
    </head>
    <body>
    <div id="map" class="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHUMaudNC3W-f3XO7NXbXBJP7wytJF4SI"></script>
    <script type="module">
        import styles from './styles.js'
        const $map = document.querySelector('#map')
        const map = new window.google.maps.Map($map, {
            center: {
                lat:0,
                lng:0,
            },
            zoom: 3,
            styles
        })
        renderData()

        async function getData(){
            const response = await fetch('https://wuhan-coronavirus-api.laeyoung.endpoint.ainize.ai/jhu-edu/latest')
            const data = await response.json()
            return data
        }

        const popup = new window.google.maps.InfoWindow()

        function renderExtraData({confirmed, deaths, recovered, provincestate, countryregion}){
            return `
            <div>
            <p><strong>${provincestate} - ${countryregion}</strong></p>
            <p> Confirmados: ${confirmed}</p>
            <p> Muertes: ${deaths}</p>
            <p> Recuperados: ${recovered}</p>
            </div>
            `
        }

        //llamara a la primera funcion, porque lo que retornamos es una premisa
        async function renderData(){
            const data = await getData()
            console.log(data)
            data.forEach(item => {
                if (item.confirmed > 0){

                    const marker = new window.google.maps.Marker({
                position:{
                    lat: item.location.lat,
                    lng: item.location.lng,
                },
                map,
                icon: './icon.png'
                //personalizar nuestro icono 
                
            })
            //asignandole eventos al marker
            marker.addListener('click', ()=>{
                popup.setContent(renderExtraData(item))
                popup.open(map, marker)
            })
            }
         })
        }
    </script>
    </body>
    </html>
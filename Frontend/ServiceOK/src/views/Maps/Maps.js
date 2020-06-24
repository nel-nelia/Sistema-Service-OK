import React from "react";
//para colocar la cabecera
import { makeStyles } from "@material-ui/core/styles";
import InputLabel from "@material-ui/core/InputLabel";
// core components
import GridItem from "components/Grid/GridItem.js";
import GridContainer from "components/Grid/GridContainer.js";
import CustomInput from "components/CustomInput/CustomInput.js";
import Button from "components/CustomButtons/Button.js";

import Card from "components/Card/Card.js";
import CardHeader from "components/Card/CardHeader.js";
import CardAvatar from "components/Card/CardAvatar.js";
import CardBody from "components/Card/CardBody.js";
import CardFooter from "components/Card/CardFooter.js";
//si no funciona borrarlo
import {
  withScriptjs,
  withGoogleMap,
  GoogleMap,
  Marker,
} from "react-google-maps";

//para el diseño
const styles = {
  cardCategoryWhite: {
    "&,& a,& a:hover,& a:focus" : {
    color: "rgba(255,255,255,.62)",
    margin: "0",
    fontSize: "14px",
    marginTop: "0",
    marginBottom: "0"
  },
  "& a,& a:hover,& a:focus": {
    color: "#FFFFFF"
  },
},
  cardTitleWhite: {
    color: "#FFFFFF",
    marginTop: "0px",
    minHeight: "auto",
    fontWeight: "300",
    fontFamily: "'Roboto', 'Helvetica', 'Arial', sans-serif",
    marginBottom: "3px",
    textDecoration: "none",
    "& small": {
      color: "#777",
      fontSize: "65%",
      fontWeight: "400",
      lineHeight: "1"
    }
  },
  tableUpgradeWrapper: {
    display: "block",
    width: "100%",
    overflowX: "auto",
    WebkitOverflowScrolling: "touch",
    MsOverflowStyle: "-ms-autohiding-scrollbar"
  },
  table: {
    width: "100%",
    maxWidth: "100%",
    marginBottom: "1rem",
    backgroundColor: "transparent",
    borderCollapse: "collapse",
    display: "table",
    borderSpacing: "2px",
    borderColor: "grey",
    "& thdead tr th": {
      fontSize: "1.063rem",
      padding: "12px 8px",
      verticalAlign: "middle",
      fontWeight: "300",
      borderTopWidth: "0",
      borderBottom: "1px solid rgba(0, 0, 0, 0.06)",
      textAlign: "inherit"
    },
    "& tbody tr td": {
      padding: "12px 8px",
      verticalAlign: "middle",
      borderTop: "1px solid rgba(0, 0, 0, 0.06)"
    },
    "& td, & th": {
      display: "table-cell"
    }
  },
  center: {
    textAlign: "center"
  }
};
//borrarlos en todo caso
const useStyles = makeStyles(styles);
//
//
export default function TypographyPage() {
  const classes = useStyles();
  return (
    <div>
    <GridContainer>
      <GridItem xs={12} sm={12} md={11.5}>
        <Card>
          <CardHeader color="primary">
            <h4 className={classes.cardTitleWhite}>Gestionar Ubicacion de Establecimiento</h4>
            <p className={classes.cardCategoryWhite}>
              Gestionar tus establecimientos
            </p>
          </CardHeader>
         <CardBody>
         <GridContainer>
                <GridItem xs={12} sm={12} md={3}>
                  <CustomInput
                    labelText="Latitud"
                    id="lati_establecimiento"
                    formControlProps={{
                      fullWidth: true
                    }}
                  />
                </GridItem>
                <GridItem xs={12} sm={12} md={3}>
                  <CustomInput
                    labelText="Longitud"
                    id="long_establecimiento"
                    formControlProps={{
                      fullWidth: true
                    }}
                  />
                </GridItem>
                
                </GridContainer>  
                <CardFooter>
              <Button color="primary">Aceptar</Button>
            </CardFooter> 
         </CardBody>
        </Card>
      </GridItem>
      <GridContainer>
        
      </GridContainer>
     
    </GridContainer>
    </div>
  );
}
//
//script del mapa
/*const CustomSkinMap = withScriptjs(
  withGoogleMap(() => (
    <GoogleMap
      defaultZoom={13}
      defaultCenter={{ lat: -18.0113379, lng: -70.2566863 }}
      defaultOptions={{
        scrollwheel: false,
        zoomControl: true,
       styles: [
          {
            featureType: "water",
            stylers: [
              { saturation: 43 },
              { lightness: -11 },
              { hue: "#0088ff" }
            ]
          },
          {
            featureType: "road",
            elementType: "geometry.fill",
            stylers: [
              { hue: "#ff0000" },
              { saturation: -100 },
              { lightness: 99 }
            ]
          },
          {
            featureType: "road",
            elementType: "geometry.stroke",
            stylers: [{ color: "#808080" }, { lightness: 54 }]
          },
          {
            featureType: "landscape.man_made",
            elementType: "geometry.fill",
            stylers: [{ color: "#ece2d9" }]
          },
          {
            featureType: "poi.park",
            elementType: "geometry.fill",
            stylers: [{ color: "#ccdca1" }]
          },
          {
            featureType: "road",
            elementType: "labels.text.fill",
            stylers: [{ color: "#767676" }]
          },
          {
            featureType: "road",
            elementType: "labels.text.stroke",
            stylers: [{ color: "#ffffff" }]
          },
          { featureType: "poi", stylers: [{ visibility: "off" }] },
          {
            featureType: "landscape.natural",
            elementType: "geometry.fill",
            stylers: [{ visibility: "on" }, { color: "#b8cb93" }]
          },
          { featureType: "poi.park", stylers: [{ visibility: "on" }] },
          {
            featureType: "poi.sports_complex",
            stylers: [{ visibility: "on" }]
          },
          { featureType: "poi.medical", stylers: [{ visibility: "on" }] },
          {
            featureType: "poi.business",
            stylers: [{ visibility: "simplified" }]
          }
        ]
      }}
    >
      <Marker position={{ lat: -18.0113379, lng: -70.2566863 }} />
    </GoogleMap>
  ))
);


export default function Maps() {
  return (
    <CustomSkinMap
    
    //<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNAXohf-3egfiJ2NExexvsUCvf1Q_yCY4"
   // type="text/javascript"></script>

      googleMapURL="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNAXohf-3egfiJ2NExexvsUCvf1Q_yCY4"
     loadingElement={<div style={{ height: `100%` }} />}
      containerElement={<div style={{ height: `100vh` }} />}
     mapElement={<div style={{ height: `100%` }} />}
    />
  );
}*/

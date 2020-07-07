import React from "react";
// @material-ui/core components
import { makeStyles } from "@material-ui/core/styles";
import InputLabel from "@material-ui/core/InputLabel";
// core components
import GridItem from "views/GestionarEstablecimientos/node_modules/components/Grid/GridItem.js.js";
import GridContainer from "views/GestionarEstablecimientos/node_modules/components/Grid/GridContainer.js.js";
import CustomInput from "views/GestionarEstablecimientos/node_modules/components/CustomInput/CustomInput.js.js";
import Button from "views/GestionarEstablecimientos/node_modules/components/CustomButtons/Button.js.js";

import Card from "views/GestionarEstablecimientos/node_modules/components/Card/Card.js.js";
import CardHeader from "views/GestionarEstablecimientos/node_modules/components/Card/CardHeader.js.js";
import CardAvatar from "views/GestionarEstablecimientos/node_modules/components/Card/CardAvatar.js.js";
import CardBody from "views/GestionarEstablecimientos/node_modules/components/Card/CardBody.js.js";
import CardFooter from "views/GestionarEstablecimientos/node_modules/components/Card/CardFooter.js.js";


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

const useStyles = makeStyles(styles);

export default function TypographyPage() {
  const classes = useStyles();
  return (
    <div>
    <GridContainer>
      <GridItem xs={12} sm={12} md={8}>
        <Card>
          <CardHeader color="primary">
            <h4 className={classes.cardTitleWhite}>Gestionar Ubicacion de Establecimiento</h4>
            <p className={classes.cardCategoryWhite}>
              Gestionar tus establecimientos
            </p>
          </CardHeader>
         <CardBody>
         <GridContainer>
                <GridItem xs={12} sm={12} md={5}>
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
      
     
    </GridContainer>
    </div>
  );
}

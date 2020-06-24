/*eslint-disable*/
import React from "react";
// @material-ui/core components
import { makeStyles } from "@material-ui/core/styles";
import Hidden from "@material-ui/core/Hidden";
import InputLabel from "@material-ui/core/InputLabel";
// core components
import GridItem from "components/Grid/GridItem.js";
import GridContainer from "components/Grid/GridContainer.js";
import CustomInput from "components/CustomInput/CustomInput.js";
import Button from "components/CustomButtons/Button.js";
import Card from "components/Card/Card.js";
import CardHeader from "components/Card/CardHeader.js";
import CardBody from "components/Card/CardBody.js";
import CardFooter from "components/Card/CardFooter.js";


import styles from "assets/jss/material-dashboard-react/views/iconsStyle.js";


const useStyles = makeStyles(styles);

export default function Icons() {
  const classes = useStyles();
  return (
    <GridContainer>
      <GridItem xs={12} sm={12} md={12}>
        <Card plain>
          <CardHeader plain color="primary">
            <h4 className={classes.cardTitleWhite}>Consultas Estado de Establecimientos</h4>
            <p className={classes.cardCategoryWhite}>
              Consultar Estado de Establecimientos
             
            </p>
          </CardHeader>
          <CardBody>
           <GridContainer>
           <GridItem xs={12} sm={12} md={5}>
                  <CustomInput
                    labelText="Nombre"
                    id="nom_actividad"
                    formControlProps={{
                      fullWidth: true
                    }}
                  />
                </GridItem>
                <GridItem xs={12} sm={12} md={3}>
                  <CustomInput
                    labelText="Direccion"
                    id="dir_actividad"
                    formControlProps={{
                      fullWidth: true
                    }}
                  />
                </GridItem>
                <GridItem xs={12} sm={12} md={4}>
                  <CustomInput
                    labelText="Telefono"
                    id="tel_actividad"
                    formControlProps={{
                      fullWidth: true
                    }}
                  />
                </GridItem>
                </GridContainer>
                <GridContainer>
                <GridItem xs={12} sm={12} md={3}>
                  <CustomInput
                    labelText="Whatsapp"
                    id="what_actividad"
                    formControlProps={{
                      fullWidth: true
                    }}
                  />
                </GridItem>
                <GridItem xs={12} sm={12} md={3}>
                  <CustomInput
                    labelText="Delivery"
                    id="deli_actividad"
                    formControlProps={{
                      fullWidth: true
                    }}
                  />
                </GridItem>
           </GridContainer>
          </CardBody>
        </Card>
      </GridItem>
    </GridContainer>
  );
}

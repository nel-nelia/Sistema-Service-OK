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

import ListarEstablecimientos from './ListarEstablecimiento';
import styles from "assets/jss/material-dashboard-react/views/iconsStyle.js";


const useStyles = makeStyles(styles);

export default function Icons() {
  const classes = useStyles();
  return (

    <div>
      <GridContainer>
        <GridItem xs={12} sm={12} md={12}>
          <Card>
            <CardHeader color="primary">
              <h4 className={classes.cardTitleWhite}>Gestionar Establecimiento</h4>            
            </CardHeader>
            <CardBody>

            <ListarEstablecimientos>    </ListarEstablecimientos>

              <GridContainer>
                                             

              </GridContainer>

            </CardBody>
        </Card>

        </GridItem>
        
      </GridContainer>
    </div>
  );
}

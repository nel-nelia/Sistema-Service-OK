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

import avatar from "assets/img/faces/marc.jpg";

import Listaractividades from './ListarActividades';
//bootstrap
import axios from "axios";
import "views/GestionarEstablecimientos/node_modules/bootstrap/dist/css/bootstrap.min.css";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashAlt } from '@fortawesome/free-solid-svg-icons';
import { Modal, ModalBody, ModalFooter, ModalHeader, Dropdown, ButtonDropdown } from 'reactstrap';

const styles = {
  cardCategoryWhite: {
    color: "rgba(255,255,255,.62)",
    margin: "0",
    fontSize: "14px",
    marginTop: "0",
    marginBottom: "0"
  },
  cardTitleWhite: {
    color: "#FFFFFF",
    marginTop: "0px",
    minHeight: "auto",
    fontWeight: "300",
    fontFamily: "'Roboto', 'Helvetica', 'Arial', sans-serif",
    marginBottom: "3px",
    textDecoration: "none"
   
  }
};

const useStyles = makeStyles(styles);

export default function UserProfile() {
  const classes = useStyles();
  return (
    <div>
      <GridContainer>
        <GridItem xs={12} sm={12} md={12}>
          <Card>
            <CardHeader color="primary">
              <h4 className={classes.cardTitleWhite}>Gestionar Actividad</h4>            
            </CardHeader>
            <CardBody>

            <Listaractividades>    </Listaractividades>

              <GridContainer>
                                             

              </GridContainer>

            </CardBody>
        </Card>

        </GridItem>
        
      </GridContainer>
    </div>
  );
}

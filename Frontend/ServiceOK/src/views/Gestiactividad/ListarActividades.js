import React, { Component} from 'react';
import axios from 'axios';
import CardBody from "components/Card/CardBody.js";
import Table from "components/Table/Table.js";
import GridItem from "components/Grid/GridItem.js";
import GridContainer from "components/Grid/GridContainer.js";

import Card from "components/Card/Card.js";
import CardHeader from "components/Card/CardHeader.js";

import "bootstrap/dist/css/bootstrap.min.css";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashAlt, faPlusCircle } from '@fortawesome/free-solid-svg-icons';
import { Modal, ModalBody, ModalFooter, ModalHeader } from 'reactstrap'; 

class ListarActividades extends Component{

    state={
      cursos:[],
      modalInsertar: false,
    }
 
    //metodo
    modalInsertar=()=>{
      this.setState({modalInsertar: !this.state.modalInsertar});
    }
    componentDidMount() {      
        axios.get("https://serviceokapi.azurewebsites.net/api/Actividades")
            .then((Response) =>{
      
              const cursos = Response.data;
          this.setState({ cursos})
        } );
        console.log(this.state.cursos)
      }

      render(){
    
       
        let cursos = this.state.cursos.map((curso)=>
        {
            return(                  
                <tr>
                  <td>{curso.nombre}</td> 
                   <td>{curso.descripcion}</td>
                    <td>{curso.flagActivo}</td>
                    <td>
                      <button className="btn btn-primary" ><FontAwesomeIcon icon={faEdit}/></button>
                      {" "}
                      <button className="btn btn-danger" ><FontAwesomeIcon icon={faTrashAlt}/></button>
                    </td>
                </tr>
 
          )
        })

          return(
            
            <div>
              <br /> <br />
                <GridItem xs={12} sm={12} md={12}>
             <table className="table" tableHeader Color="primary" WIDTH="70%" color='#FFFFFF'>
            <thead>
             <tr>
                 <th><center>Nombre</center> </th>
                  <th><center>Descripcion</center></th>
                  <th><center>Estado</center></th>
                  <th><center>Acciones</center></th>
                </tr>
                </thead>
                <tbody>
                {cursos}

                    </tbody>
             </table>
             <br />
             <button className="btn btn-primary" onClick={()=>this.modalInsertar()}><FontAwesomeIcon icon={faPlusCircle}/></button>
             </GridItem>

            <Modal isOpen={this.state.modalInsertar}>
              <ModalHeader style={{display: 'block'}}>
                <span style={{float:'right'}}>x</span>
              </ModalHeader>
              <ModalBody>
                <div className="form-group">
                  <label htmlFor="actividadId">Actividad ID</label>
                  <input className="form-control" type="text" name="actividadId" id="actividadId" readOnly/>
                  <br />
                  <label htmlFor="nombre">Nombre</label>
                  <input className="form-control" type="text" name="nombre" id="nombre"/>
                  <br />
                  <label htmlFor="descripcion">Descripcion</label>
                  <input className="form-control" type="text" name="descripcion" id="descripcion"/>
                  <br />
                  <label htmlFor="flagActivo">Flag Activo</label>
                  <input className="form-control" type="text" name="flagActivo" id="flagActivo"/>
                  
                </div>
              </ModalBody>
              <ModalFooter>
                <button className="btn btn-success">Insertar</button>
                <button className="btn btn-danger" onClick={()=>this.modalInsertar()}>Cancelar</button>
              </ModalFooter>
            </Modal>
             
           
      
            
        
          </div>



          )
      }
  }
  export default ListarActividades;
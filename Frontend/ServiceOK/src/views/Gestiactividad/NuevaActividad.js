import React, { Component} from 'react';
import axios from 'axios';
import CardBody from "components/Card/CardBody.js";
import Table from "components/Table/Table.js";
import GridItem from "components/Grid/GridItem.js";
import GridContainer from "components/Grid/GridContainer.js";

import Card from "components/Card/Card.js";

import CardHeader from "components/Card/CardHeader.js";
import Listaractividades from './ListarActividades';

import "bootstrap/dist/css/bootstrap.min.css";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashAlt, faPlusCircle } from '@fortawesome/free-solid-svg-icons';
import { Modal, ModalBody, ModalFooter, ModalHeader, ListGroup } from 'reactstrap'; 
class NuevaActividades extends Component{

   constructor(props){
       super(props);
       
       let registrado=false
       this.state={
        cursos:[],
        modalInsertar: false,
        modalEliminar:false,

        actividadId:'',
        nombre:'',
        descripcion:'',
        flagActivo:'',
        actividadTipoId:'',
        registrado
       }

   } 

   //metodos
   onChange(e){
    this.setState(
      {
        [e.target.name]: e.target.value
      }
    )    
    console.log(this.state)    
   }

   submitForm(e)
   {
     e.preventDefault()
  
  const{actividadId, nombre, descripcion, flagActivo, actividadTipoId} = this.state;
 
  axios.post(`https://serviceokapi.azurewebsites.net/api/Actividades`, { 
    
    "actividadId":this.state.cursos,
    "nombre": nombre,
    "Descripcion": descripcion,
    "flagActivo": "True",
    "actividadTipo": "E"
   },

  )
      .then(res => {
        console.log(res);
        console.log(res.data);
        this.setState({
          registrado: true
          
        })
      })
          .catch(function(error)
          {
          console.log(error)
          }
        )
  
  console.log(this.state.descripcion)
   }

   render() {

    var cursos = this.state.cursos.map((curso)=>
        {
            return(
              
                <tr>
                <td>{curso.actividadId}</td>
                <td>{curso.nombre}</td> 
                 <td>{curso.descripcion}</td>
                  <td>{curso.flagActivo}</td>
                  <td>
                    <button className="btn btn-primary" ><FontAwesomeIcon icon={faEdit}/></button>
                    {" "}
                    <button className="btn btn-danger" onClick={()=>{this.curso(curso);this.setState({modalEliminar:true})}} ><FontAwesomeIcon icon={faTrashAlt}/></button>
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
               <th>ID</th>
                 <th>Nombre </th>
                  <th>Descripcion</th>
                  <th>Estado</th>
                  <th>Acciones</th>
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
                  <input className="form-control" type="text" name="actividadId" id="actividadId" onChange={this.onChange} value={this.state.cursos.length+1}/>
                  <br />
                  <label htmlFor="nombre">Nombre</label>
                  <input className="form-control" type="text" name="nombre" id="nombre" onChange={this.onChange} value={form.nombre}/>
                  <br />
                  <label htmlFor="descripcion">Descripcion</label>
                  <input className="form-control" type="text" name="descripcion" id="descripcion" onChange={this.onChange} value={form.descripcion}/>
                  <br />
                  <label htmlFor="flagActivo">Flag Activo</label>
                  <input className="form-control" type="text" name="radio1" id="flagActivo" onChange={this.onChange} value={form.flagActivo}/>
                 
                  <br />
                  <label htmlFor="actividadTipoId">Tipo Actividad</label>
                  <br />
                  <div className="btn-group">
                    <button className="btn btn-danger" type="button" id="actividadTipoId"  onChange={this.handleChange} value={form.actividadTipoId} >Seleccione</button>

                  </div>

                </div>
              </ModalBody>
              <ModalFooter>
                <button className="btn btn-success" onClick={()=>this.peticionPost()}>Insertar</button>
                <button className="btn btn-danger" onClick={()=>this.modalInsertar()}>Cancelar</button>
              </ModalFooter>
            </Modal>

            /</div>
        )
    }
}
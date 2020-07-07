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

class ListarTipoActividades extends Component{

    state={
      ActividadTipo:[],

      modalInsertar: false,
      form:{
        ActividadTipoID:'',
        Nombre:'',
        FlagActivo:''
      }
    }
 
    //metodo
    modalInsertar=()=>{
      this.setState({modalInsertar: !this.state.modalInsertar});
    }

    handlechange=async e=>{
      e.persist();
      await this.setState({
        form:{
          ...this.state.form,
          [e.target.name]: e.target.value
        }
      });
      console.log(this.state.form);
    }
    //peticion post
    peticionPost=async()=>{
     await axios.post("https://serviceokapi.azurewebsites.net/api/ActividadTipos",this.state.form).then(response=>{
        this.modalInsertar();
        this.componentDidMount();
      }).catch(error=>{
        console.log(error.message);
      })
    }

    componentDidMount() {      
        axios.get("https://serviceokapi.azurewebsites.net/api/ActividadTipos")
            .then((Response) =>{
      
              const ActividadTipo = Response.data;
          this.setState({ ActividadTipo})
        } );
        console.log(this.state.ActividadTipo)
      }

      render(){
    const {form}=this.state;
       
        let ActividadTipo = this.state.ActividadTipo.map((ActividadTipos)=>
        {
            return(                  
                <tr>
                  <td>{ActividadTipos.nombre}</td> 
                   <td>{ActividadTipos.FlagActivo}</td>
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
                 <th>Nombre </th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                {ActividadTipo}

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
                  <label htmlFor="actividadTipoID">ActividadTipoID </label>
                  <input className="form-control" type="text" name="actividadTipoId" id="actividadTipoID" readOnly onChange={this.handlechange} value={this.state.ActividadTipo.length+1}/>
                  <br />
                  <label htmlFor="nombre">Nombre</label>
                  <input className="form-control" type="text" name="Nombre" id="Nombre" onChange={this.handlechange} value={form.Nombre}/>
                  <br />
                  <label htmlFor="flagActivo">Flag Activo</label>
                  <input className="form-control" type="text" name="FlagActivo" id="FlagActivo" onChange={this.handlechange} value={form.FlagActivo}/>
                  
                </div>
              </ModalBody>
              <ModalFooter>
                <button className="btn btn-success" onClick={()=>this.peticionPost()}>Insertar</button>
                <button className="btn btn-danger" onClick={()=>this.modalInsertar()}>Cancelar</button>
              </ModalFooter>
            </Modal>
             
           
      
            
        
          </div>



          )
      }
  }
  export default ListarTipoActividades;
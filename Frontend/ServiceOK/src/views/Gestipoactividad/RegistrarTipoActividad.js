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


class RegistrarTipoActividad extends Component{

  constructor(props){
    super(props);
    let registrado = false;
    this.state={
      data:[],
      actividadTipoId:'',
        nombre:'',
        flagActivo:'',
        flagActivoTexto:''

    }
    this.onChange = this.onChange.bind(this)
  this.submitForm = this.submitForm.bind(this)
 
  }  
        
        componentDidMount() {     
          let idact= localStorage.getItem('actividadTipoId'); 
          console.log(idact);
        axios.get(`https://serviceokapi.azurewebsites.net/api/ActividadTipos/${actv}`,{
          headers:{Authorization}

        })
            .then((Response) =>{
      this.state.actividad = Response.data.actividadTipoId;
         console.log(this.state.actividad)
        } );
        //console.log(this.state.ActividadTipo)
      }
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
  const{nombre,flagActivo,flagActivoTexto} = this.state;
  axios.post(`https://serviceokapi.azurewebsites.net/api/ActividadTipos/`,{
    "actividadTipoId" : this.state.actividad,
    "nombre":nombre,
    "flagActivo":flagActivo,
    "flagActivoTexto":flagActivoTexto
  },{
    headers:{Authorization}
  })
  .then(res =>{
    console.log(res);
    console.log(res.data);
    this.setState({
      registrado:true
    })
  })
  .catch(function(error)
  {
    console.log(error)
  })
  console.log(this.state.nombre)
}
      render(){

    
       
        let ActividadTipo = this.state.ActividadTipo.map((ActividadTipos)=>
        {
            return(                  
                <tr>
                  <td>{ActividadTipos.actividadTipoId}</td>
                  <td>{ActividadTipos.nombre}</td> 
                  <td>{ActividadTipos.flagActivo}</td>
                   <td>{ActividadTipos.flagActivoTexto}</td>
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
               <th>ID</th>
                 <th>Nombre </th>
                  <th>Estado</th>
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
                  <input className="form-control" type="text" name="actividadTipoId" id="actividadTipoID" readOnly onChange={this.handleChange} value={this.state.ActividadTipo.length+1}/>
                  <br />
                  <label htmlFor="nombre">Nombre</label>
                  <input className="form-control" type="text" name="nombre" id="nombre" onChange={this.handleChange} value={form.nombre}/>
                  <br />
                  <label htmlFor="flagActivoTexto">Estado Activo</label>
                  <input className="form-control" type="text" name="flagActivoTexto" id="flagActivoTexto" onChange={this.handleChange} value={form.flagActivoTexto}/>
                  <br />
                  <label htmlFor="flagActivo">Estado Activo</label>
                  <input className="form-control" type="text" name="flagActivo" id="flagActivo" onChange={this.handleChange} value={form.flagActivo}/>
                  
                </div>
              </ModalBody>
              <ModalFooter>
                
                <button onSubmit="submit" className="btn btn-success" onClick={()=>this.peticionPost()}>Insertar</button>
              
                <button className="btn btn-danger" onClick={()=>this.modalInsertar()}>Cancelar</button>
              </ModalFooter>
            </Modal>
             
           
      
            
        
          </div>



          )
      }
  }
  export default ListarTipoActividades;
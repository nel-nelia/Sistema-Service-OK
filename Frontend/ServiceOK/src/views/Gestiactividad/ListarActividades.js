import React, { Component} from 'react';
import axios from 'axios';
import CardBody from "components/Card/CardBody.js";
import Table from "components/Table/Table.js";
import GridItem from "components/Grid/GridItem.js";
import GridContainer from "components/Grid/GridContainer.js";
//import { useForm } from "react-bootstrap";
//import { Form, Button, FormGroup, FormControl, ControlLabel } from "react-bootstrap";
import Card from "components/Card/Card.js";
import CardHeader from "components/Card/CardHeader.js";

import "bootstrap/dist/css/bootstrap.min.css";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashAlt, faPlusCircle } from '@fortawesome/free-solid-svg-icons';
import { Modal, ModalBody, ModalFooter, ModalHeader, ListGroup } from 'reactstrap'; 

class ListarActividades extends Component{

    state={
      cursos:[],
      modalInsertar: false,
      modalEliminar:false,

      form:{
        nombre:'',
        descripcion:'',
        flagActivo:'',
        actividadTipoId:''
      }

    
    }
 
    //metodo
    modalInsertar=()=>{
      this.setState({modalInsertar: !this.state.modalInsertar});
    }

    //metodo
    handleChange=async e=>{
      e.persist();
      await this.setState({
        form:{
          ...this.state.form,
          [e.target.name]: e.target.value //de acuerdo al nombre sera como se guarde en el estado
        }
      });
      console.log(this.state.form);
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
    //peticion post
    peticionPost=async()=>{
     await axios.post("https://serviceokapi.azurewebsites.net/api/Actividades",this.state.form).then(response=>{
        this.modalInsertar();
        this.componentDidMount();
      }).catch(error=>{
        console.log(error.message);
      })
    }

    peticionDelete=()=>{
      axios.delete("https://serviceokapi.azurewebsites.net/api/Actividades"+this.state.form.actividadId).then(response=>{
        this.setState({modalEliminar:false});
        this.componentDidMount();
      })
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
               const {form}=this.state;
               let cursos = this.state.cursos.map((curso)=>
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
                
              </ModalHeader>
         
              <ModalBody>
                <div className="form-group" onSubmit={this.submitForm}>
                 
                  <label htmlFor="nombre">Nombre</label>
                  <input className="form-control" type="text" name="nombre" id="nombre" onChange={this.handleChange} value={form.nombre}/>
                  <br />
                  <label htmlFor="descripcion">Descripcion</label>
                  <input className="form-control" type="text" name="descripcion" id="descripcion" onChange={this.handleChange} value={form.descripcion}/>
                  <br />
                  <label htmlFor="flagActivo">Flag Activo</label>
                  <input className="form-control" type="text" name="flagActivo" id="flagActivo" onChange={this.handleChange} value={form.flagActivo}/>
                 
                  
                  <label htmlFor="actividadTipoId">Tipo Actividad</label>
                  <input className="form-control" type="text" name="actividadTipoId" id="actividadTipoId" onChange={this.handleChange} value={form.actividadTipoId}/>
                 
                  <br />

                  <br></br>
                  <button className="btn btn-success" onClick={()=>this.peticionPost()}>Insertar</button>
                <button className="btn btn-danger" onClick={()=>this.modalInsertar()}>Cancelar</button>

                </div>
              </ModalBody>
              
              <ModalFooter>
               
              </ModalFooter>
            </Modal>
             
           <Modal isOpen={this.state.modalEliminar}>
             <ModalBody>
               Estas seguro que desea eliminar a la empresa {form && form.actividadId}
             </ModalBody>
             <ModalFooter>
               <button className="btn btn-danger" onClick={()=>this.peticionDelete()}>Si</button>
               <button className="btn btn-secundary" onClick={()=>this.setState({modalEliminar:false})}>No</button>
             </ModalFooter>
           </Modal>
      
            
        
          </div>



          )
      }
  }
  export default ListarActividades;
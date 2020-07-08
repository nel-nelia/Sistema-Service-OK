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
import { Modal, ModalBody, ModalFooter, ModalHeader, ListGroup } from 'reactstrap'; 
//

class ListarEstablecimientos extends Component{

    state={
      Establecimientos:[],
      modalInsertar: false,
      form:{
        establecimientoId:'',
        nombre:'',
        telefono:'',
        whatsappUrl:'',
        delivery:'',
        permiso:'',
        ruc:'',
        coordenadaX:'',
        coordenadaY:'',
        representanteId:''
      }
    }
 
    //metodo
    modalInsertar=()=>{
      this.setState({modalInsertar: !this.state.modalInsertar});
    }

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
    //peticion post
    peticionPost=async()=>{
     await axios.post("https://serviceokapi.azurewebsites.net/api/Establecimientos",this.state.form).then(response=>{
        this.modalInsertar();
        this.componentDidMount();
      }).catch(error=>{
        console.log(error.message);
      })
    }

    componentDidMount() {      
        axios.get("https://serviceokapi.azurewebsites.net/api/Establecimientos")
            .then((Response) =>{
      
              const Establecimientos = Response.data;
          this.setState({ Establecimientos})
        } );
        console.log(this.state.Establecimientos)
      }

      render(){
    const {form}=this.state;
        let Establecimientos = this.state.Establecimientos.map((Establecimiento)=>
        {
            return(                  
                <tr>
                  <td>{Establecimiento.nombre}</td> 
                   <td>{Establecimiento.telefono}</td>
                    <td>{Establecimiento.whatsappUrl}</td>
                    <td>{Establecimiento.delivery}</td>
                    <td>{Establecimiento.permiso}</td>
                    <td>{Establecimiento.ruc}</td>
                    <td>{Establecimiento.coordenadaX}</td>
                    <td>{Establecimiento.coordenadaY}</td>
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
                  <th>Telefono</th>
                  <th>Whatsapp-URL</th>
                  <th>Delivery</th>
                  <th>Permiso</th>
                  <th>Ruc</th>
                  <th>CoordenadasX</th>
                  <th>CoordenadasY</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                {Establecimientos}

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
                <div className="form-group" >
                
                  <label htmlFor="establecimientoId">Establecimiento ID</label>
                  <input className="form-control" type="text" name="establecimientoId" id="establecimientoId" readOnly onChange={this.handleChange} value={this.state.Establecimientos.length+1}/>
                  <br />
                  <label htmlFor="nombre">Nombre</label>
                  <input className="form-control" type="text" name="nombre" id="nombre" onChange={this.handleChange} value={form.nombre}/>
                  <br />
                  <label htmlFor="descripcion">Telefono</label>
                  <input className="form-control" type="text" name="telefono" id="telefono" onChange={this.handleChange} value={form.telefono}/>
                  <br />
                  <label htmlFor="whatsappUrl">whatsappUrl</label>
                  <input className="form-control" type="text" name="whatsappUrl" id="whatsappUrl" onChange={this.handleChange} value={form.whatsappUrl}/>
                  <label htmlFor="delivery">Delivery</label>
                  <input className="form-control" type="text" name="delivery" id="delivery" onChange={this.handleChange} value={form.delivery}/>
                  <label htmlFor="delivery">Delivery</label>
                  <input className="form-control" type="text" name="delivery" id="delivery" onChange={this.handleChange} value={form.delivery}/>
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
             
           
      
            
        
          </div>



          )
      }
  }
  export default ListarEstablecimientos;
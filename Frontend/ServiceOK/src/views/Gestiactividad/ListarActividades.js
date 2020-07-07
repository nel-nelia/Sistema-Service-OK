import React, { Component} from 'react';
import axios from 'axios';
import CardBody from "components/Card/CardBody.js";
import Table from "components/Table/Table.js";
import GridItem from "components/Grid/GridItem.js";
import GridContainer from "components/Grid/GridContainer.js";

import Card from "components/Card/Card.js";
import CardHeader from "components/Card/CardHeader.js";
class ListarActividades extends Component{

    state={
      cursos:[]
      
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
                </tr>

               
            
               
            
      
          )
        })

          return(
            
            <div>
                <GridItem xs={12} sm={12} md={12}>
             <table tableHeader Color="primary" WIDTH="70%" color='#FFFFFF'>
            
             <tr>
                 <th><center>Nombre</center> </th>
                  <th><center>Descripcion</center></th>
                  <th><center>Estado</center></th>
                  <th><center>Acciones</center></th>
                </tr>
                <tbody>
                {cursos}

                    </tbody>
             </table>

             </GridItem>

             <GridItem xs={12} sm={12} md={12}>
        <Card>
        
          <CardBody>
            <Table
              tableHeaderColor="primary"
              tableHead={["Name", "Country", "City", "Salary"]}
              tableData={[
                ["Dakota Rice", "Niger", "Oud-Turnhout", "$36,738"],
                ["Minerva Hooper", "Curaçao", "Sinaai-Waas", "$23,789"],
                ["Sage Rodriguez", "Netherlands", "Baileux", "$56,142"],
                ["Philip Chaney", "Korea, South", "Overland Park", "$38,735"],
                ["Doris Greene", "Malawi", "Feldkirchen in Kärnten", "$63,542"],
                ["Mason Porter", "Chile", "Gloucester", "$78,615"]
              ]}
            />
          </CardBody>
        </Card>

      </GridItem>
           
      
            
        
          </div>
          )
      }
  }
  export default ListarActividades;
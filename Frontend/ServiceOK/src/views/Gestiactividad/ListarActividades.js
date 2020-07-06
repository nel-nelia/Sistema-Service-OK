import React, { Component} from 'react';
import axios from 'axios';

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
              <div > 
                <div>
                <h5>Codigo: {curso.nombre}</h5>
                 
                </div>  
                      </div>
          )
        })

          return(
            <div>
             
           <div>faffar</div> 
              {cursos}
        
          </div>
          )
      }
  }
  export default ListarActividades;
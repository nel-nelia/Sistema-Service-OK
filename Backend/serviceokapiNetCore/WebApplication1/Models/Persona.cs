using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class Persona
    {
        public int EntidadId { get; set; }
        public string Dni { get; set; }
        public string Nombre { get; set; }
        public string Apellido { get; set; }
        public int Telefono { get; set; }
        public string Direccion { get; set; }

        public virtual Entidad Entidad { get; set; }
    }
}

using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class Entidad
    {
        public int EntidadId { get; set; }
        public int FlagActivo { get; set; }

        public virtual Persona Persona { get; set; }
        public virtual Representante Representante { get; set; }
        public virtual Usuario Usuario { get; set; }
    }
}

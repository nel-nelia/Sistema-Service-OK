using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class RolCalificacion
    {
        public int RolId { get; set; }
        public int GestionarCalificacion { get; set; }

        public virtual Rol Rol { get; set; }
    }
}

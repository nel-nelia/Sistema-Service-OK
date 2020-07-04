using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class RolPersona
    {
        public int RolId { get; set; }
        public int GestionaPersona { get; set; }
        public int GestionaRepresentante { get; set; }

        public virtual Rol Rol { get; set; }
    }
}

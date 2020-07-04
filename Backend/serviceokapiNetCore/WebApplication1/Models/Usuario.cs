using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class Usuario
    {
        public int EntidadId { get; set; }
        public string Usuario1 { get; set; }
        public string SecretPass { get; set; }
        public int RolId { get; set; }

        public virtual Entidad Entidad { get; set; }
        public virtual Rol Rol { get; set; }
    }
}

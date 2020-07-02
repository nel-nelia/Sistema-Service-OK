using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class RolEstablecimiento
    {
        public int RolId { get; set; }
        public int GestionarEstablecimiento { get; set; }
        public int GestionarUbicacion { get; set; }
        public int DesactivarEstablecimiento { get; set; }

        public virtual Rol Rol { get; set; }
    }
}

using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class RolUsuario
    {
        public int RolId { get; set; }
        public int GestionaUsuario { get; set; }
        public int DesactivaUsuario { get; set; }

        public virtual Rol Rol { get; set; }
    }
}

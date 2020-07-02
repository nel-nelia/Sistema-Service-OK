using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class RolActividad
    {
        public int RolId { get; set; }
        public int GestionarActividad { get; set; }
        public int DesactivarActividad { get; set; }
        public int GestionarActividadTipo { get; set; }
        public int DesactivarActividadTipo { get; set; }

        public virtual Rol Rol { get; set; }
    }
}

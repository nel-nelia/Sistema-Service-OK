using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class ActividadTipo
    {
        public ActividadTipo()
        {
            Actividad = new HashSet<Actividad>();
        }

        public int ActividadTipoId { get; set; }
        public string Nombre { get; set; }
        public int FlagActivo { get; set; }

        public virtual ICollection<Actividad> Actividad { get; set; }
    }
}

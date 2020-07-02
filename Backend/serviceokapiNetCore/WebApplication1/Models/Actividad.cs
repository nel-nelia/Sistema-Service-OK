using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class Actividad
    {
        public Actividad()
        {
            Establecimiento = new HashSet<Establecimiento>();
        }

        public int ActividadId { get; set; }
        public string Nombre { get; set; }
        public string Descripcion { get; set; }
        public int FlagActivo { get; set; }
        public int ActividadTipoId { get; set; }

        public virtual ActividadTipo ActividadTipo { get; set; }
        public virtual ICollection<Establecimiento> Establecimiento { get; set; }
    }
}

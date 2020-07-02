using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class Establecimiento
    {
        public Establecimiento()
        {
            Calificacion = new HashSet<Calificacion>();
        }

        public int EstablecimientoId { get; set; }
        public string Nombre { get; set; }
        public int Telefono { get; set; }
        public string WhatsappUrl { get; set; }
        public int Delivery { get; set; }
        public int Permiso { get; set; }
        public string Ruc { get; set; }
        public string CoordenadaX { get; set; }
        public string CoordenadaY { get; set; }
        public int FlagActivo { get; set; }
        public int ActividadId { get; set; }
        public int RepresentanteId { get; set; }

        public virtual Actividad Actividad { get; set; }
        public virtual Representante Representante { get; set; }
        public virtual ICollection<Calificacion> Calificacion { get; set; }
    }
}

using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class Calificacion
    {
        public int CalificacionId { get; set; }
        public int NumeroEstrellas { get; set; }
        public string Comentario { get; set; }
        public int EstablecimientoId { get; set; }

        public virtual Establecimiento Establecimiento { get; set; }
    }
}

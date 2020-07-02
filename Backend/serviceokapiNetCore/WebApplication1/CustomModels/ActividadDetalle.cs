using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace serviceOkapi.CustomModels
{
    public class ActividadDetalle
    {
        [Key]
        public int ActividadID { get; set; }
        public string Nombre { get; set; }
        public string Descripcion { get; set; }
        public int FlagActivo { get; set; }
        public int ActividadTipoID { get; set; }
        public string NombreActividadTipo { get; set; }
        public int FlagActivoActividadTipo { get; set; }
    }
}

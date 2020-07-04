using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class Representante
    {
        public Representante()
        {
            Establecimiento = new HashSet<Establecimiento>();
        }

        public int RepresentanteId { get; set; }
        public int Ruc { get; set; }
        public string CorreoEmpresarial { get; set; }

        public virtual Entidad RepresentanteNavigation { get; set; }
        public virtual ICollection<Establecimiento> Establecimiento { get; set; }
    }
}

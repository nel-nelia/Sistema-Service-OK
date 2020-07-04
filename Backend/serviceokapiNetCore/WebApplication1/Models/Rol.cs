using System;
using System.Collections.Generic;

namespace serviceOkapi.Models
{
    public partial class Rol
    {
        public Rol()
        {
            Usuario = new HashSet<Usuario>();
        }

        public int RolId { get; set; }
        public string Nombre { get; set; }
        public string Descripcion { get; set; }

        public virtual RolActividad RolActividad { get; set; }
        public virtual RolCalificacion RolCalificacion { get; set; }
        public virtual RolEstablecimiento RolEstablecimiento { get; set; }
        public virtual RolPersona RolPersona { get; set; }
        public virtual RolUsuario RolUsuario { get; set; }
        public virtual ICollection<Usuario> Usuario { get; set; }
    }
}

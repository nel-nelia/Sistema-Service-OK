using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;


namespace serviceOkapi.Models
{
    public partial class serviceOKContext : DbContext
    {
        public serviceOKContext()
        {
        }

        public serviceOKContext(DbContextOptions<serviceOKContext> options)
            : base(options)
        {
        }

        public virtual DbSet<Actividad> Actividad { get; set; }
        public virtual DbSet<ActividadTipo> ActividadTipo { get; set; }
        public virtual DbSet<Calificacion> Calificacion { get; set; }
        public virtual DbSet<Entidad> Entidad { get; set; }
        public virtual DbSet<Establecimiento> Establecimiento { get; set; }
        public virtual DbSet<Persona> Persona { get; set; }
        public virtual DbSet<Representante> Representante { get; set; }
        public virtual DbSet<Rol> Rol { get; set; }
        public virtual DbSet<RolActividad> RolActividad { get; set; }
        public virtual DbSet<RolCalificacion> RolCalificacion { get; set; }
        public virtual DbSet<RolEstablecimiento> RolEstablecimiento { get; set; }
        public virtual DbSet<RolPersona> RolPersona { get; set; }
        public virtual DbSet<RolUsuario> RolUsuario { get; set; }
        public virtual DbSet<Usuario> Usuario { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
                //#warning To protect potentially sensitive information in your connection string, you should move it out of source code. See http://go.microsoft.com/fwlink/?LinkId=723263 for guidance on storing connection strings.
                optionsBuilder.UseSqlServer("Server=servidorserviceok.database.windows.net;Database=serviceOK;User ID=devKevin;Password=iddqdidkfA#3;");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Actividad>(entity =>
            {
                entity.Property(e => e.ActividadId).HasColumnName("ActividadID");

                entity.Property(e => e.ActividadTipoId).HasColumnName("ActividadTipoID");

                entity.Property(e => e.Descripcion)
                    .IsRequired()
                    .HasMaxLength(400)
                    .IsUnicode(false);

                entity.Property(e => e.FlagActivo).HasDefaultValueSql("((1))");

                entity.Property(e => e.Nombre)
                    .IsRequired()
                    .HasMaxLength(250)
                    .IsUnicode(false);

                entity.HasOne(d => d.ActividadTipo)
                    .WithMany(p => p.Actividad)
                    .HasForeignKey(d => d.ActividadTipoId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__Actividad__Activ__4D94879B");
            });

            modelBuilder.Entity<ActividadTipo>(entity =>
            {
                entity.Property(e => e.ActividadTipoId).HasColumnName("ActividadTipoID");

                entity.Property(e => e.FlagActivo).HasDefaultValueSql("((1))");

                entity.Property(e => e.Nombre)
                    .IsRequired()
                    .HasMaxLength(250)
                    .IsUnicode(false);
            });

            modelBuilder.Entity<Calificacion>(entity =>
            {
                entity.Property(e => e.CalificacionId).HasColumnName("CalificacionID");

                entity.Property(e => e.Comentario)
                    .IsRequired()
                    .HasMaxLength(400)
                    .IsUnicode(false);

                entity.Property(e => e.EstablecimientoId).HasColumnName("EstablecimientoID");

                entity.HasOne(d => d.Establecimiento)
                    .WithMany(p => p.Calificacion)
                    .HasForeignKey(d => d.EstablecimientoId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__Calificac__Estab__5DCAEF64");
            });

            modelBuilder.Entity<Entidad>(entity =>
            {
                entity.Property(e => e.EntidadId).HasColumnName("EntidadID");

                entity.Property(e => e.FlagActivo).HasDefaultValueSql("((1))");
            });

            modelBuilder.Entity<Establecimiento>(entity =>
            {
                entity.Property(e => e.EstablecimientoId).HasColumnName("EstablecimientoID");

                entity.Property(e => e.ActividadId).HasColumnName("ActividadID");

                entity.Property(e => e.CoordenadaX)
                    .IsRequired()
                    .HasMaxLength(250)
                    .IsUnicode(false);

                entity.Property(e => e.CoordenadaY)
                    .IsRequired()
                    .HasMaxLength(250)
                    .IsUnicode(false);

                entity.Property(e => e.FlagActivo).HasDefaultValueSql("((1))");

                entity.Property(e => e.Nombre)
                    .IsRequired()
                    .HasMaxLength(250)
                    .IsUnicode(false);

                entity.Property(e => e.RepresentanteId).HasColumnName("RepresentanteID");

                entity.Property(e => e.Ruc).HasColumnName("RUC");

                entity.Property(e => e.WhatsappUrl)
                    .IsRequired()
                    .HasColumnName("WhatsappURL")
                    .HasMaxLength(250)
                    .IsUnicode(false);

                entity.HasOne(d => d.Actividad)
                    .WithMany(p => p.Establecimiento)
                    .HasForeignKey(d => d.ActividadId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__Estableci__Activ__5AEE82B9");

                entity.HasOne(d => d.Representante)
                    .WithMany(p => p.Establecimiento)
                    .HasForeignKey(d => d.RepresentanteId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__Estableci__Repre__59FA5E80");
            });

            modelBuilder.Entity<Persona>(entity =>
            {
                entity.HasKey(e => e.EntidadId)
                    .HasName("PK__Persona__92A286E1F863393F");

                entity.Property(e => e.EntidadId)
                    .HasColumnName("EntidadID")
                    .ValueGeneratedNever();

                entity.Property(e => e.Apellido)
                    .IsRequired()
                    .HasMaxLength(250)
                    .IsUnicode(false);

                entity.Property(e => e.Direccion)
                    .IsRequired()
                    .HasMaxLength(400)
                    .IsUnicode(false);

                entity.Property(e => e.Dni).HasColumnName("DNI");

                entity.Property(e => e.Nombre)
                    .IsRequired()
                    .HasMaxLength(250)
                    .IsUnicode(false);

                entity.HasOne(d => d.Entidad)
                    .WithOne(p => p.Persona)
                    .HasForeignKey<Persona>(d => d.EntidadId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__Persona__Entidad__534D60F1");
            });

            modelBuilder.Entity<Representante>(entity =>
            {
                entity.Property(e => e.RepresentanteId)
                    .HasColumnName("RepresentanteID")
                    .ValueGeneratedNever();

                entity.Property(e => e.CorreoEmpresarial)
                    .IsRequired()
                    .HasMaxLength(250)
                    .IsUnicode(false);

                entity.Property(e => e.Ruc).HasColumnName("RUC");

                entity.HasOne(d => d.RepresentanteNavigation)
                    .WithOne(p => p.Representante)
                    .HasForeignKey<Representante>(d => d.RepresentanteId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__Represent__Repre__5629CD9C");
            });

            modelBuilder.Entity<Rol>(entity =>
            {
                entity.Property(e => e.RolId).HasColumnName("RolID");

                entity.Property(e => e.Descripcion)
                    .IsRequired()
                    .HasMaxLength(400)
                    .IsUnicode(false);

                entity.Property(e => e.Nombre)
                    .IsRequired()
                    .HasMaxLength(250)
                    .IsUnicode(false);
            });

            modelBuilder.Entity<RolActividad>(entity =>
            {
                entity.HasKey(e => e.RolId)
                    .HasName("PK__RolActiv__F92302D113A63188");

                entity.Property(e => e.RolId)
                    .HasColumnName("RolID")
                    .ValueGeneratedNever();

                entity.HasOne(d => d.Rol)
                    .WithOne(p => p.RolActividad)
                    .HasForeignKey<RolActividad>(d => d.RolId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__RolActivi__RolID__6FE99F9F");
            });

            modelBuilder.Entity<RolCalificacion>(entity =>
            {
                entity.HasKey(e => e.RolId)
                    .HasName("PK__RolCalif__F92302D1121D4ACB");

                entity.Property(e => e.RolId)
                    .HasColumnName("RolID")
                    .ValueGeneratedNever();

                entity.HasOne(d => d.Rol)
                    .WithOne(p => p.RolCalificacion)
                    .HasForeignKey<RolCalificacion>(d => d.RolId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__RolCalifi__RolID__797309D9");
            });

            modelBuilder.Entity<RolEstablecimiento>(entity =>
            {
                entity.HasKey(e => e.RolId)
                    .HasName("PK__RolEstab__F92302D1CEB274F4");

                entity.Property(e => e.RolId)
                    .HasColumnName("RolID")
                    .ValueGeneratedNever();

                entity.HasOne(d => d.Rol)
                    .WithOne(p => p.RolEstablecimiento)
                    .HasForeignKey<RolEstablecimiento>(d => d.RolId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__RolEstabl__RolID__75A278F5");
            });

            modelBuilder.Entity<RolPersona>(entity =>
            {
                entity.HasKey(e => e.RolId)
                    .HasName("PK__RolPerso__F92302D114113906");

                entity.Property(e => e.RolId)
                    .HasColumnName("RolID")
                    .ValueGeneratedNever();

                entity.HasOne(d => d.Rol)
                    .WithOne(p => p.RolPersona)
                    .HasForeignKey<RolPersona>(d => d.RolId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__RolPerson__RolID__693CA210");
            });

            modelBuilder.Entity<RolUsuario>(entity =>
            {
                entity.HasKey(e => e.RolId)
                    .HasName("PK__RolUsuar__F92302D1280C476D");

                entity.Property(e => e.RolId)
                    .HasColumnName("RolID")
                    .ValueGeneratedNever();

                entity.HasOne(d => d.Rol)
                    .WithOne(p => p.RolUsuario)
                    .HasForeignKey<RolUsuario>(d => d.RolId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__RolUsuari__RolID__6477ECF3");
            });

            modelBuilder.Entity<Usuario>(entity =>
            {
                entity.HasKey(e => e.EntidadId)
                    .HasName("PK__Usuario__92A286E10D52C4C7");

                entity.Property(e => e.EntidadId)
                    .HasColumnName("EntidadID")
                    .ValueGeneratedNever();

                entity.Property(e => e.RolId).HasColumnName("RolID");

                entity.Property(e => e.SecretPass)
                    .IsRequired()
                    .HasMaxLength(20)
                    .IsUnicode(false);

                entity.Property(e => e.Usuario1)
                    .IsRequired()
                    .HasColumnName("Usuario")
                    .HasMaxLength(20)
                    .IsUnicode(false);

                entity.HasOne(d => d.Entidad)
                    .WithOne(p => p.Usuario)
                    .HasForeignKey<Usuario>(d => d.EntidadId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__Usuario__Entidad__7D439ABD");

                entity.HasOne(d => d.Rol)
                    .WithMany(p => p.Usuario)
                    .HasForeignKey(d => d.RolId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__Usuario__RolID__7C4F7684");
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);

        
    }
}

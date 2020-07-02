using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using serviceOkapi.CustomModels;
using serviceOkapi.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace serviceOkapi.DataAccess
{
    public class ActividadDA
    {
        private readonly serviceOKContext dbContext;

        public ActividadDA()
        {
            dbContext = new serviceOKContext();
        }

        public async Task<ActionResult<IEnumerable<ActividadDetalle>>> GetActividadDetalle()
        {
            var resultList = await (

                    from a in dbContext.Actividad
                    join at in dbContext.ActividadTipo
                    on a.ActividadTipoId equals at.ActividadTipoId

                    select new ActividadDetalle
                    {
                        ActividadID = a.ActividadId,
                        Nombre = a.Nombre,
                        Descripcion = a.Descripcion,
                        FlagActivo = a.FlagActivo,
                        ActividadTipoID = at.ActividadTipoId,
                        NombreActividadTipo = at.Nombre,
                        FlagActivoActividadTipo = at.FlagActivo
                    }

                ).ToListAsync();

            return resultList;
        }

        public async Task<ActionResult<IEnumerable<ActividadDetalle>>> GetActividadDetalle(int idActividad)
        {
            var resultList = await (

                    from a in dbContext.Actividad
                    join at in dbContext.ActividadTipo
                    on a.ActividadTipoId equals at.ActividadTipoId
                    where a.ActividadId == idActividad

                    select new ActividadDetalle
                    {
                        ActividadID = a.ActividadId,
                        Nombre = a.Nombre,
                        Descripcion = a.Descripcion,
                        FlagActivo = a.FlagActivo,
                        ActividadTipoID = at.ActividadTipoId,
                        NombreActividadTipo = at.Nombre,
                        FlagActivoActividadTipo = at.FlagActivo
                    }

                ).ToListAsync();

            return resultList;
        }

    }
}

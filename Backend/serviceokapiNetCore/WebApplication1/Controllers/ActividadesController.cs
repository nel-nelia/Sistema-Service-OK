using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using serviceOkapi.CustomModels;
using serviceOkapi.DataAccess;
using serviceOkapi.Models;

namespace serviceOkapi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class ActividadesController : ControllerBase
    {
        private readonly serviceOKContext _context;
        private ActividadDA actividadDA;

        public ActividadesController(serviceOKContext context)
        {
            _context = context;
            actividadDA = new ActividadDA();
        }

        // GET: api/Actividades
        [HttpGet]
        public async Task<ActionResult<IEnumerable<Actividad>>> GetActividad()
        {
            return await _context.Actividad.ToListAsync();
        }

        // GET: api/Actividades/5
        [HttpGet("{id}")]
        public async Task<ActionResult<Actividad>> GetActividad(int id)
        {
            var actividad = await _context.Actividad.FindAsync(id);

            if (actividad == null)
            {
                return NotFound();
            }

            return actividad;
        }

        // PUT: api/Actividades/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutActividad(int id, Actividad actividad)
        {
            if (id != actividad.ActividadId)
            {
                return BadRequest();
            }

            _context.Entry(actividad).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!ActividadExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/Actividades
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<Actividad>> PostActividad(Actividad actividad)
        {
            _context.Actividad.Add(actividad);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetActividad", new { id = actividad.ActividadId }, actividad);
        }

        // DELETE: api/Actividades/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<Actividad>> DeleteActividad(int id)
        {
            var actividad = await _context.Actividad.FindAsync(id);
            if (actividad == null)
            {
                return NotFound();
            }

            _context.Actividad.Remove(actividad);
            await _context.SaveChangesAsync();

            return actividad;
        }

        private bool ActividadExists(int id)
        {
            return _context.Actividad.Any(e => e.ActividadId == id);
        }

        /*Custom Methods*/

        // GET: api/GetActividadsDetalle
        [HttpGet]
        [Route("[action]")]
        public async Task<ActionResult<IEnumerable<ActividadDetalle>>> GetActividadDetalle()
        {
            var listActividad = await actividadDA.GetActividadDetalle();

            if (listActividad == null)
            {
                return NotFound();
            }

            return listActividad;

        }

        // GET: api/GetActividadsDetalle/5
        [HttpGet]
        [Route("[action]/{idEntidad}")]
        public async Task<ActionResult<IEnumerable<ActividadDetalle>>> GetActividadDetalle(int idActividad)
        {
            var actividad = await actividadDA.GetActividadDetalle(idActividad);

            if (actividad == null)
            {
                return NotFound();
            }

            return actividad;
        }
    }
}

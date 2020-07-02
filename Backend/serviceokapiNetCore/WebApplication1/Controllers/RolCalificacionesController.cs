using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using serviceOkapi.Models;

namespace serviceOkapi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class RolCalificacionesController : ControllerBase
    {
        private readonly serviceOKContext _context;

        public RolCalificacionesController(serviceOKContext context)
        {
            _context = context;
        }

        // GET: api/RolCalificaciones
        [HttpGet]
        public async Task<ActionResult<IEnumerable<RolCalificacion>>> GetRolCalificacion()
        {
            return await _context.RolCalificacion.ToListAsync();
        }

        // GET: api/RolCalificaciones/5
        [HttpGet("{id}")]
        public async Task<ActionResult<RolCalificacion>> GetRolCalificacion(int id)
        {
            var rolCalificacion = await _context.RolCalificacion.FindAsync(id);

            if (rolCalificacion == null)
            {
                return NotFound();
            }

            return rolCalificacion;
        }

        // PUT: api/RolCalificaciones/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutRolCalificacion(int id, RolCalificacion rolCalificacion)
        {
            if (id != rolCalificacion.RolId)
            {
                return BadRequest();
            }

            _context.Entry(rolCalificacion).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!RolCalificacionExists(id))
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

        // POST: api/RolCalificaciones
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<RolCalificacion>> PostRolCalificacion(RolCalificacion rolCalificacion)
        {
            _context.RolCalificacion.Add(rolCalificacion);
            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateException)
            {
                if (RolCalificacionExists(rolCalificacion.RolId))
                {
                    return Conflict();
                }
                else
                {
                    throw;
                }
            }

            return CreatedAtAction("GetRolCalificacion", new { id = rolCalificacion.RolId }, rolCalificacion);
        }

        // DELETE: api/RolCalificaciones/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<RolCalificacion>> DeleteRolCalificacion(int id)
        {
            var rolCalificacion = await _context.RolCalificacion.FindAsync(id);
            if (rolCalificacion == null)
            {
                return NotFound();
            }

            _context.RolCalificacion.Remove(rolCalificacion);
            await _context.SaveChangesAsync();

            return rolCalificacion;
        }

        private bool RolCalificacionExists(int id)
        {
            return _context.RolCalificacion.Any(e => e.RolId == id);
        }
    }
}

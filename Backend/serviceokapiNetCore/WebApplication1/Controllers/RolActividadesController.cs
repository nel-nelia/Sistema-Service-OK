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
    public class RolActividadesController : ControllerBase
    {
        private readonly serviceOKContext _context;

        public RolActividadesController(serviceOKContext context)
        {
            _context = context;
        }

        // GET: api/RolActividades
        [HttpGet]
        public async Task<ActionResult<IEnumerable<RolActividad>>> GetRolActividad()
        {
            return await _context.RolActividad.ToListAsync();
        }

        // GET: api/RolActividades/5
        [HttpGet("{id}")]
        public async Task<ActionResult<RolActividad>> GetRolActividad(int id)
        {
            var rolActividad = await _context.RolActividad.FindAsync(id);

            if (rolActividad == null)
            {
                return NotFound();
            }

            return rolActividad;
        }

        // PUT: api/RolActividades/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutRolActividad(int id, RolActividad rolActividad)
        {
            if (id != rolActividad.RolId)
            {
                return BadRequest();
            }

            _context.Entry(rolActividad).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!RolActividadExists(id))
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

        // POST: api/RolActividades
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<RolActividad>> PostRolActividad(RolActividad rolActividad)
        {
            _context.RolActividad.Add(rolActividad);
            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateException)
            {
                if (RolActividadExists(rolActividad.RolId))
                {
                    return Conflict();
                }
                else
                {
                    throw;
                }
            }

            return CreatedAtAction("GetRolActividad", new { id = rolActividad.RolId }, rolActividad);
        }

        // DELETE: api/RolActividades/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<RolActividad>> DeleteRolActividad(int id)
        {
            var rolActividad = await _context.RolActividad.FindAsync(id);
            if (rolActividad == null)
            {
                return NotFound();
            }

            _context.RolActividad.Remove(rolActividad);
            await _context.SaveChangesAsync();

            return rolActividad;
        }

        private bool RolActividadExists(int id)
        {
            return _context.RolActividad.Any(e => e.RolId == id);
        }
    }
}

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
    public class EstablecimientosController : ControllerBase
    {
        private readonly serviceOKContext _context;

        public EstablecimientosController(serviceOKContext context)
        {
            _context = context;
        }

        // GET: api/Establecimientos
        [HttpGet]
        public async Task<ActionResult<IEnumerable<Establecimiento>>> GetEstablecimiento()
        {
            return await _context.Establecimiento.ToListAsync();
        }

        // GET: api/Establecimientos/5
        [HttpGet("{id}")]
        public async Task<ActionResult<Establecimiento>> GetEstablecimiento(int id)
        {
            var establecimiento = await _context.Establecimiento.FindAsync(id);

            if (establecimiento == null)
            {
                return NotFound();
            }

            return establecimiento;
        }

        // PUT: api/Establecimientos/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutEstablecimiento(int id, Establecimiento establecimiento)
        {
            if (id != establecimiento.EstablecimientoId)
            {
                return BadRequest();
            }

            _context.Entry(establecimiento).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!EstablecimientoExists(id))
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

        // POST: api/Establecimientos
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<Establecimiento>> PostEstablecimiento(Establecimiento establecimiento)
        {
            _context.Establecimiento.Add(establecimiento);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetEstablecimiento", new { id = establecimiento.EstablecimientoId }, establecimiento);
        }

        // DELETE: api/Establecimientos/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<Establecimiento>> DeleteEstablecimiento(int id)
        {
            var establecimiento = await _context.Establecimiento.FindAsync(id);
            if (establecimiento == null)
            {
                return NotFound();
            }

            _context.Establecimiento.Remove(establecimiento);
            await _context.SaveChangesAsync();

            return establecimiento;
        }

        private bool EstablecimientoExists(int id)
        {
            return _context.Establecimiento.Any(e => e.EstablecimientoId == id);
        }
    }
}

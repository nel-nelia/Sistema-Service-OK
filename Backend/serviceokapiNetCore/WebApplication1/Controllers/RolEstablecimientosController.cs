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
    public class RolEstablecimientosController : ControllerBase
    {
        private readonly serviceOKContext _context;

        public RolEstablecimientosController(serviceOKContext context)
        {
            _context = context;
        }

        // GET: api/RolEstablecimientos
        [HttpGet]
        public async Task<ActionResult<IEnumerable<RolEstablecimiento>>> GetRolEstablecimiento()
        {
            return await _context.RolEstablecimiento.ToListAsync();
        }

        // GET: api/RolEstablecimientos/5
        [HttpGet("{id}")]
        public async Task<ActionResult<RolEstablecimiento>> GetRolEstablecimiento(int id)
        {
            var rolEstablecimiento = await _context.RolEstablecimiento.FindAsync(id);

            if (rolEstablecimiento == null)
            {
                return NotFound();
            }

            return rolEstablecimiento;
        }

        // PUT: api/RolEstablecimientos/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutRolEstablecimiento(int id, RolEstablecimiento rolEstablecimiento)
        {
            if (id != rolEstablecimiento.RolId)
            {
                return BadRequest();
            }

            _context.Entry(rolEstablecimiento).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!RolEstablecimientoExists(id))
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

        // POST: api/RolEstablecimientos
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<RolEstablecimiento>> PostRolEstablecimiento(RolEstablecimiento rolEstablecimiento)
        {
            _context.RolEstablecimiento.Add(rolEstablecimiento);
            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateException)
            {
                if (RolEstablecimientoExists(rolEstablecimiento.RolId))
                {
                    return Conflict();
                }
                else
                {
                    throw;
                }
            }

            return CreatedAtAction("GetRolEstablecimiento", new { id = rolEstablecimiento.RolId }, rolEstablecimiento);
        }

        // DELETE: api/RolEstablecimientos/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<RolEstablecimiento>> DeleteRolEstablecimiento(int id)
        {
            var rolEstablecimiento = await _context.RolEstablecimiento.FindAsync(id);
            if (rolEstablecimiento == null)
            {
                return NotFound();
            }

            _context.RolEstablecimiento.Remove(rolEstablecimiento);
            await _context.SaveChangesAsync();

            return rolEstablecimiento;
        }

        private bool RolEstablecimientoExists(int id)
        {
            return _context.RolEstablecimiento.Any(e => e.RolId == id);
        }
    }
}

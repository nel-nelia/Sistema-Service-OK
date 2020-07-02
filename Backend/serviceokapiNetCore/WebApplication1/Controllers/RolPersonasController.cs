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
    public class RolPersonasController : ControllerBase
    {
        private readonly serviceOKContext _context;

        public RolPersonasController(serviceOKContext context)
        {
            _context = context;
        }

        // GET: api/RolPersonas
        [HttpGet]
        public async Task<ActionResult<IEnumerable<RolPersona>>> GetRolPersona()
        {
            return await _context.RolPersona.ToListAsync();
        }

        // GET: api/RolPersonas/5
        [HttpGet("{id}")]
        public async Task<ActionResult<RolPersona>> GetRolPersona(int id)
        {
            var rolPersona = await _context.RolPersona.FindAsync(id);

            if (rolPersona == null)
            {
                return NotFound();
            }

            return rolPersona;
        }

        // PUT: api/RolPersonas/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutRolPersona(int id, RolPersona rolPersona)
        {
            if (id != rolPersona.RolId)
            {
                return BadRequest();
            }

            _context.Entry(rolPersona).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!RolPersonaExists(id))
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

        // POST: api/RolPersonas
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<RolPersona>> PostRolPersona(RolPersona rolPersona)
        {
            _context.RolPersona.Add(rolPersona);
            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateException)
            {
                if (RolPersonaExists(rolPersona.RolId))
                {
                    return Conflict();
                }
                else
                {
                    throw;
                }
            }

            return CreatedAtAction("GetRolPersona", new { id = rolPersona.RolId }, rolPersona);
        }

        // DELETE: api/RolPersonas/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<RolPersona>> DeleteRolPersona(int id)
        {
            var rolPersona = await _context.RolPersona.FindAsync(id);
            if (rolPersona == null)
            {
                return NotFound();
            }

            _context.RolPersona.Remove(rolPersona);
            await _context.SaveChangesAsync();

            return rolPersona;
        }

        private bool RolPersonaExists(int id)
        {
            return _context.RolPersona.Any(e => e.RolId == id);
        }
    }
}

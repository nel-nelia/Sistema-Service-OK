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
    public class RepresentantesController : ControllerBase
    {
        private readonly serviceOKContext _context;

        public RepresentantesController(serviceOKContext context)
        {
            _context = context;
        }

        // GET: api/Representantes
        [HttpGet]
        public async Task<ActionResult<IEnumerable<Representante>>> GetRepresentante()
        {
            return await _context.Representante.ToListAsync();
        }

        // GET: api/Representantes/5
        [HttpGet("{id}")]
        public async Task<ActionResult<Representante>> GetRepresentante(int id)
        {
            var representante = await _context.Representante.FindAsync(id);

            if (representante == null)
            {
                return NotFound();
            }

            return representante;
        }

        // PUT: api/Representantes/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutRepresentante(int id, Representante representante)
        {
            if (id != representante.RepresentanteId)
            {
                return BadRequest();
            }

            _context.Entry(representante).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!RepresentanteExists(id))
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

        // POST: api/Representantes
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<Representante>> PostRepresentante(Representante representante)
        {
            _context.Representante.Add(representante);
            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateException)
            {
                if (RepresentanteExists(representante.RepresentanteId))
                {
                    return Conflict();
                }
                else
                {
                    throw;
                }
            }

            return CreatedAtAction("GetRepresentante", new { id = representante.RepresentanteId }, representante);
        }

        // DELETE: api/Representantes/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<Representante>> DeleteRepresentante(int id)
        {
            var representante = await _context.Representante.FindAsync(id);
            if (representante == null)
            {
                return NotFound();
            }

            _context.Representante.Remove(representante);
            await _context.SaveChangesAsync();

            return representante;
        }

        private bool RepresentanteExists(int id)
        {
            return _context.Representante.Any(e => e.RepresentanteId == id);
        }
    }
}

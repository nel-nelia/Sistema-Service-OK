﻿using System;
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
    public class ActividadTiposController : ControllerBase
    {
        private readonly serviceOKContext _context;

        public ActividadTiposController(serviceOKContext context)
        {
            _context = context;
        }

        // GET: api/ActividadTipos
        [HttpGet]
        public async Task<ActionResult<IEnumerable<ActividadTipo>>> GetActividadTipo()
        {
            return await _context.ActividadTipo.ToListAsync();
        }

        // GET: api/ActividadTipos/5
        [HttpGet("{id}")]
        public async Task<ActionResult<ActividadTipo>> GetActividadTipo(int id)
        {
            var actividadTipo = await _context.ActividadTipo.FindAsync(id);

            if (actividadTipo == null)
            {
                return NotFound();
            }

            return actividadTipo;
        }

        // PUT: api/ActividadTipos/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutActividadTipo(int id, ActividadTipo actividadTipo)
        {
            if (id != actividadTipo.ActividadTipoId)
            {
                return BadRequest();
            }

            _context.Entry(actividadTipo).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!ActividadTipoExists(id))
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

        // POST: api/ActividadTipos
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<ActividadTipo>> PostActividadTipo(ActividadTipo actividadTipo)
        {
            _context.ActividadTipo.Add(actividadTipo);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetActividadTipo", new { id = actividadTipo.ActividadTipoId }, actividadTipo);
        }

        // DELETE: api/ActividadTipos/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<ActividadTipo>> DeleteActividadTipo(int id)
        {
            var actividadTipo = await _context.ActividadTipo.FindAsync(id);
            if (actividadTipo == null)
            {
                return NotFound();
            }

            _context.ActividadTipo.Remove(actividadTipo);
            await _context.SaveChangesAsync();

            return actividadTipo;
        }

        private bool ActividadTipoExists(int id)
        {
            return _context.ActividadTipo.Any(e => e.ActividadTipoId == id);
        }
    }
}

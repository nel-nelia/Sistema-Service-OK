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
    public class RolUsuariosController : ControllerBase
    {
        private readonly serviceOKContext _context;

        public RolUsuariosController(serviceOKContext context)
        {
            _context = context;
        }

        // GET: api/RolUsuarios
        [HttpGet]
        public async Task<ActionResult<IEnumerable<RolUsuario>>> GetRolUsuario()
        {
            return await _context.RolUsuario.ToListAsync();
        }

        // GET: api/RolUsuarios/5
        [HttpGet("{id}")]
        public async Task<ActionResult<RolUsuario>> GetRolUsuario(int id)
        {
            var rolUsuario = await _context.RolUsuario.FindAsync(id);

            if (rolUsuario == null)
            {
                return NotFound();
            }

            return rolUsuario;
        }

        // PUT: api/RolUsuarios/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutRolUsuario(int id, RolUsuario rolUsuario)
        {
            if (id != rolUsuario.RolId)
            {
                return BadRequest();
            }

            _context.Entry(rolUsuario).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!RolUsuarioExists(id))
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

        // POST: api/RolUsuarios
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<RolUsuario>> PostRolUsuario(RolUsuario rolUsuario)
        {
            _context.RolUsuario.Add(rolUsuario);
            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateException)
            {
                if (RolUsuarioExists(rolUsuario.RolId))
                {
                    return Conflict();
                }
                else
                {
                    throw;
                }
            }

            return CreatedAtAction("GetRolUsuario", new { id = rolUsuario.RolId }, rolUsuario);
        }

        // DELETE: api/RolUsuarios/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<RolUsuario>> DeleteRolUsuario(int id)
        {
            var rolUsuario = await _context.RolUsuario.FindAsync(id);
            if (rolUsuario == null)
            {
                return NotFound();
            }

            _context.RolUsuario.Remove(rolUsuario);
            await _context.SaveChangesAsync();

            return rolUsuario;
        }

        private bool RolUsuarioExists(int id)
        {
            return _context.RolUsuario.Any(e => e.RolId == id);
        }
    }
}

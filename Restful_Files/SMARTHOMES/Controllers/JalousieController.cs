using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Threading.Tasks;

namespace SMARTHOMES.Controllers
{
    [ApiController]
    [Route("api/[controller]")]
    public class JalousieController : ControllerBase
    {
        private static List<Jalousie> Jalousie;
        private static bool init = true;
        public int zaehler = 0;
        public int zaehlerName = 0;



        private static readonly string[] NameOrt = new[]
        {
            "Jalousie 1", "Jalousie 2", "Jalousie 3", "Jalousie 4"
        };

        private readonly ILogger<JalousieController> _logger;

        public JalousieController(ILogger<JalousieController> logger)
        {
            _logger = logger;

            //Zufallsgenerator für Windgeshwindihkeit
            var WingeschwindigkeitRandom = new Random();

            if (init)
            {
                var rng = new Random();
                Jalousie = Enumerable.Range(1, 4).Select(index => new Jalousie

                {
                    Id = zaehler++,
                    Name = NameOrt[zaehlerName++],
                    Windgeschwindigkeit = WingeschwindigkeitRandom.Next(1, 100),
                    Status = true

                })
                .ToList();
                //Abfragen der Wingeschwindigeit und noch den Status ändern vor der Ausgabe
                for (int i = 0; i < 4; i++)
                {
                    if (Jalousie[i].Windgeschwindigkeit <= 70)
                    {
                        Jalousie[i].Status = true;
                    }
                    else
                    {
                        Jalousie[i].Status = false;
                    }
                }
                init = false;
            }

        }

        [HttpGet]
        public List<Jalousie> Get()
        {
            return Jalousie;
        }

        [HttpGet("{id}")]
        public Jalousie Get(int id)
        {
            if (id >= Jalousie.Count)
                return new Jalousie();

            return Jalousie[id];
        }

        [HttpPost]
        public HttpStatusCode Post(Jalousie J)
        {
            Jalousie.Add(J);
            return HttpStatusCode.OK;
        }

        // PUT api/<ValuesController>/5
        [HttpPut("{id}")]
        public void Put(int id)
        {
            int a = 0;
            a = Jalousie.Count;

            if (id == 111)
            {
                for (int i = 0; i < a; i++)
                {
                    Jalousie[i].Status = true;
                }

            }
            else if (id == 999)
            {
                for (int i = 0; i < a; i++)
                {
                    Jalousie[i].Status = false;
                }

            }

            else if (Jalousie[id].Status == true)
                Jalousie[id].Status = false;
            else if (Jalousie[id].Status == false)
                Jalousie[id].Status = true;
        }

        [HttpDelete("{id}")]
        public void Delete(int id)
        {
            Jalousie.RemoveAt(id);
        }

    }
}

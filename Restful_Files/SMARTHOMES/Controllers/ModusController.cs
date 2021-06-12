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
    public class ModusController : ControllerBase
    {
        private static List<Modus> Modus;
        private static bool init = true;
        public int zaehler = 0;
        public int zaehlerName = 0;





        private static readonly string[] NameOrt = new[]
        {
            "Licht1", "Licht2", "Licht3","Licht4"
        };



        private readonly ILogger<ModusController> _logger;

        public ModusController(ILogger<ModusController> logger)
        {
            _logger = logger;

            //Generiern des Zufalles --> Status offen oder zu 
            var random = new Random();
            var randomBool = random.Next(2) == 1;


            if (init)
            {
                var rng = new Random();
                Modus = Enumerable.Range(1, 4).Select(index => new Modus

                {
                    // Date = DateTime.Now.AddDays(index),
                    Lichtstärke = rng.Next(0),
                    // Summary = Summaries[rng.Next(Summaries.Length)]
                    Id = zaehler++,
                    Name = NameOrt[zaehlerName++],
                    Status = false,
                })
                .ToList();

                init = false;
            }

        }

        [HttpGet]
        public List<Modus> Get()
        {
            return Modus;
        }

        [HttpGet("{id}")]
        public Modus Get(int id)
        {
            if (id >= Modus.Count)
                return new Modus();

            return Modus[id];
        }

        [HttpPost]
        public HttpStatusCode Post(Modus M)
        {
            Modus.Add(M);
            return HttpStatusCode.OK;
        }





        // PUT api/<ValuesController>/5
        [HttpPut("{id}")]
        public void Put(int id)
        {
            //1 == Lesemodus
            //2 == RomantikModus
            //3 == Partymodus
            //4 == Anderer Modus

            int a = 0;

            a = Modus.Count;

            if (id == 1)
            {
                for (int i = 0; i < a; i++)
                {
                    Modus[0].Status = true;
                    Modus[0].Lichtstärke = 70;

                    Modus[1].Status = true;
                    Modus[1].Lichtstärke = 70;

                    Modus[2].Status = false;
                    Modus[2].Lichtstärke = 0;

                    Modus[3].Status = false;
                    Modus[3].Lichtstärke = 0;
                }


            }

            if (id == 2)
            {
                for (int i = 0; i < a; i++)
                {
                    Modus[0].Status = true;
                    Modus[0].Lichtstärke = 20;

                    Modus[1].Status = true;
                    Modus[1].Lichtstärke = 20;

                    Modus[2].Status = true;
                    Modus[2].Lichtstärke = 20;

                    Modus[3].Status = true;
                    Modus[3].Lichtstärke = 20;
                }


            }

            if (id == 3)
            {
                for (int i = 0; i < a; i++)
                {
                    Modus[0].Status = true;
                    Modus[0].Lichtstärke = 10;

                    Modus[1].Status = true;
                    Modus[1].Lichtstärke = 10;

                    Modus[2].Status = true;
                    Modus[2].Lichtstärke = 10;

                    Modus[3].Status = true;
                    Modus[3].Lichtstärke = 10;
                }


            }

        }






            /*int a = 0;
            a = Licht.Count;

            if (id == 111)
            {
                for (int i = 0; i < a; i++)
                {
                    Licht[i].Status = true;
                }

            }
            else if (id == 999)
            {
                for (int i = 0; i < a; i++)
                {
                    Licht[i].Status = false;
                }

            }

            else if (Licht[id].Status == true)
                Licht[id].Status = false;
            else if (Licht[id].Status == false)
                Licht[id].Status = true;
        }
            */

        [HttpDelete("{id}")]
        public void Delete(int id)
        {
            Modus.RemoveAt(id);
        }


    }
}

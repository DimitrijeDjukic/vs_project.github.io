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
    public class LichtController : ControllerBase
    {
        private static List<Licht> Licht;
        private static bool init = true;
        public int zaehler = 0;
        public int zaehlerName = 0;

        private static readonly string[] NameOrt = new[]
        {
            "LichtWohnzimmer", "LichtWC", "LichtKüche", "LichtSchlafzimmer"
        };

        private readonly ILogger<LichtController> _logger;

        public LichtController(ILogger<LichtController> logger)
        {
            _logger = logger;

            //Generiern des Zufalles --> Status offen oder zu 
            var random = new Random();
            var randomBool = random.Next(2) == 1;


            if (init)
            {
                var rng = new Random();
                Licht = Enumerable.Range(1, 4).Select(index => new Licht

                {
                    // Date = DateTime.Now.AddDays(index),
                    // TemperatureC = rng.Next(-20, 55),
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
        public List<Licht> Get()
        {
            return Licht;
        }

        [HttpGet("{id}")]
        public Licht Get(int id)
        {
            if (id >= Licht.Count)
                return new Licht();

            return Licht[id];
        }

        [HttpPost]
        public HttpStatusCode Post(Licht L)
        {
            Licht.Add(L);
            return HttpStatusCode.OK;
        }

        // PUT api/<ValuesController>/5
        [HttpPut("{id}")]
        public void Put(int id)
        {


            //1 == Lesemodus
            //2 == RomantikModus
            //3 == Partymodus
            //4 == GamingModus

            int a = 0;

            a = Licht.Count;

            if (id == 0)
            {
                for (int i = 0; i < a; i++)
                {
                    Licht[0].Status = true;
                    Licht[0].Lichtstärke = 70;

                    Licht[1].Status = true;
                    Licht[1].Lichtstärke = 0;

                    Licht[2].Status = false;
                    Licht[2].Lichtstärke = 0;

                    Licht[3].Status = false;
                    Licht[3].Lichtstärke = 70;
                }


            }

            if (id == 1)
            {
                for (int i = 0; i < a; i++)
                {
                    Licht[0].Status = true;
                    Licht[0].Lichtstärke = 20;

                    Licht[1].Status = true;
                    Licht[1].Lichtstärke = 0;

                    Licht[2].Status = true;
                    Licht[2].Lichtstärke = 20;

                    Licht[3].Status = true;
                    Licht[3].Lichtstärke = 20;
                }


            }

            if (id == 2)
            {
                for (int i = 0; i < a; i++)
                {
                    Licht[0].Status = true;
                    Licht[0].Lichtstärke = 10;

                    Licht[1].Status = true;
                    Licht[1].Lichtstärke = 10;

                    Licht[2].Status = true;
                    Licht[2].Lichtstärke = 10;

                    Licht[3].Status = true;
                    Licht[3].Lichtstärke = 10;
                }
            }

            if (id == 3)
            {
                for (int i = 0; i < a; i++)
                {
                    Licht[0].Status = false;
                    Licht[0].Lichtstärke = 0;

                    Licht[1].Status = false;
                    Licht[1].Lichtstärke = 0;

                    Licht[2].Status = false;
                    Licht[2].Lichtstärke = 0;

                    Licht[3].Status = true;
                    Licht[3].Lichtstärke = 30;
                }
            }


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

        [HttpDelete("{id}")]
        public void Delete(int id)
        {
            Licht.RemoveAt(id);
        }


    }
}

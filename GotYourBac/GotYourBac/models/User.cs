using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace GotYourBac.models
{
    class User
    {
        private int age;
        private double height;
        private double weight;
        private char gender;

        User(int age, double height, double weight, char gender)
        {
            this.age = age;
            this.height = height;
            this.weight = weight;
            this.gender = gender;
        }

        public int Age { get; set; }
        public double Height { get; set; }
        public double Weight { get; set; }
        public char Gender { get; set; }

    }
}

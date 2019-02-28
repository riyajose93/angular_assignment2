using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace mvcassignment.Models
{   
    public class Register
    {   [Required]
        [StringLength(50,ErrorMessage="name cannot be longer than 50 characters")]
        [Display(Name="Name")]
        
        public string name { get; set; }
        [Required(ErrorMessage="should give the pin")]
        [Display(Name="Address")]
        [DataType(DataType.MultilineText)]
        public string add { get; set; }

        
        public string Gender { get; set; }
        [Required]
        [Display(Name = "Couse")]
        public Course courseList { get; set; }
        [Required]
        [DataType(DataType.EmailAddress)]
        [Display(Name = "E-mail")]
        public String email { get; set; }
        [Display(Name = "User Name")]
        [Required(ErrorMessage="mandatory *")]
        public String uname { get; set; }
        [Display(Name = "Password")]
        [Required(ErrorMessage="must contains 8 characters")]
        public String pwd { get; set; }
        [Required(ErrorMessage="dosen't match")]
         [Display(Name = "Confirm Password")]
        public String cpwd { get; set; }
       
        
    }
    public enum Course
{
    MCA,
    MTech,
    BTech
}
}

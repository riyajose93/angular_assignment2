using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace mvcdbapp.Models
{
    public class Customer
    {
        public int CustomerId { get; set; }
        [Required]
        [Display(Name="Name")]
        
        public string name { get; set; }
        [Required]
        [Display(Name="Address")]
        [DataType(DataType.MultilineText)]
        public string address { get; set; }
        [Required]
        [Display(Name="E-mail")]
        [DataType(DataType.EmailAddress)]
        public string email { get; set; }
        [Required]
        [Display(Name="User Name")]
        public string uname { get; set; }
        [Required(ErrorMessage="Must contain 8 characters")]
        [Display(Name="Password")]
        [DataType(DataType.Password)]
        public string pwd { get; set; }
    }
    
}
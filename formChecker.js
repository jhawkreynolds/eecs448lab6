function validateForm()
{
    let validationStep1 = validateCatalog();
    let validationStep2 = validateUsername();
    return(false);
    let validationStep3 = validatePassword();
    let validationStep4 = validateShipping();
    return false;
}

function validateCatalog()
{
    let chessset = document.getElementById("chessset");
    if(chessset.value == "" || chessset.value < 0)
    {
        alert("Invalid quantity selected for Chess Sets!");
        return false;
    }
    let airfryer = document.getElementById("airfryer");
    if(airfryer.value == "" || airfryer.value < 0)
    {
        alert("Invalid quantity selected for Air Fryer!");
        return false;
    }
    let grandpiano = document.getElementById("grandpiano");
    if(grandpiano.value == "" || grandpiano.value < 0)
    {
        alert("Invalid quantity selected for GrandPiano.");
        return false;
    }
    let fuzzysocks = document.getElementById("fuzzysocks");
    if(fuzzysocks.value == "" || fuzzysocks.value < 0)
    {
        alert("Invalid quantity selected for Fuzzy Socks.");
        return false;
    }
    return true;
}

// we want the format:
// user@domain.topleveldomain
// this logic decides whether our string meets this format.
// the rules I have made are:
// user, domain, and topleveldomain cannot have '@' or '.' 

// the logic flow is:

// 1. we take in characters for the user
//      if we take in a '.' at this point, we fail
//      if we take in a '@' as the first character, we fail

// 2. once we take in a valid '@', we start taking in for a domain
//      if we take in a '@' at this point, we fail
//      if we take in a '.' as the first character, we fail

// 3. once we take in a valid '.', we start taking in for the top level domain
//      if we take in a '@' at this point, we fail
//      if we take in a '.' as this point, we fail

// 4. the flag foundTopLevelDomain should be set to true if all steps succeed.
//      this is the boolean we pass back

function validateUsername()
{
    let username = document.getElementById("username");
    let foundUser = false;
    let foundAtSign = false;
    let foundDomain = false;
    let foundDot = false;
    let foundTopLevelDomain = false;
    for(let i = 0; i < username.length; i++)
    {
        if(username[i] == '@')
        {
            if(foundUser)
            {
                if(foundAtSign)
                {
                    return false;
                }
                else
                {
                    foundAtSign = true;
                }
            }
            else
            {
                return false;      
            }
        }
        else if(username[i] == '.')
        {
            if(foundDomain)
            {
                if(foundDot)
                {
                    return false;
                }
                else
                {
                    foundDomain = true;
                }
            }
            else
            {
                    return false;   
            }
        }
        else
        {
            if(foundAtSign)
            {
                if(foundDot)
                {
                    foundTopLevelDomain = true;
                }
                else
                {
                    foundDomain = true;
                }
            }
            else
            {
                foundUser = true;
            }
        }
    }

    if(foundTopLevelDomain == false)
    {
        alert("Valid username could not be found.");
    }
    return(foundTopLevelDomain);
}

function validatePassword()
{
    let pass = document.getElementById("password");
    if(pass.length == 0)
    {
        alert("Please enter a password.");
        return false;
    }
    return true;
}

function validateShipping()
{
    let foundShipping = false;
    let shipping = document.getElementsByName("shipping");
    for(let i = 0; i < shipping.length; i++)
    {
        if(shipping[i].checked == true)
        {
            foundShipping = true;
        }
    }
    if(foundShipping == false)
    {
        alert("Please select a shipping option.");
    }
    return(foundShipping); 
}